<?php
class Af_Cpan extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"Include CPAN Changes",
			"yak_ex");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_FILTER, $this);
	}

	function hook_article_filter($article) {
		$owner_uid = $article["owner_uid"];

		if (strpos($article["guid"], "search.cpan.org") !== FALSE) {
			if (strpos($article["plugin_data"], "cpan,$owner_uid:") === FALSE) {

				$changes = fetch_file_contents($article["link"] . 'Changes');
				if (! $changes) {
					$changes = fetch_file_contents($article["link"] . 'CHANGES');
				}
				if (! $changes) {
					$changes = fetch_file_contents($article["link"] . 'ChangeLog');
				}
				if ($changes) {
					$lines = explode("\n", $changes);
					if (count($lines) > 20) {
						$article["content"] = "<pre>" . implode("\n", array_map('htmlspecialchars', array_slice($lines, 0, 20))) . "\n...</pre>";
					} else {
						$article["content"] = "<pre>" . htmlspecialchars($changes) . "</pre>";
					}
					$article["plugin_data"] = "cpan,$owner_uid:" . $article["plugin_data"];
				}

			} else if (isset($article["stored"]["content"])) {
				$article["content"] = $article["stored"]["content"];
			}
		}

		return $article;
	}

	function api_version() {
		return 2;
	}

}
?>
