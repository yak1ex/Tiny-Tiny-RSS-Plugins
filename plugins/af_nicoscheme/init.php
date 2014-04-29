<?php
class Af_NicoScheme extends Plugin {
	private $host;

	function about() {
		return array(1.0,
			"Replace http scheme for nicovideo URLs",
			"yak_ex");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_FILTER, $this);
	}

	function hook_article_filter($article) {
		$owner_uid = $article["owner_uid"];

		if (strpos($article["link"], "www.nicovideo.jp") !== FALSE) {

			if (strpos($article["plugin_data"], "nicoscheme,$owner_uid:") === FALSE) {

				$article["plugin_data"] = "nicoscheme,$owner_uid:" . $article["plugin_data"];
				$article["link"] = preg_replace("/http:\/\/www\.nicovideo\.jp\//", "ff-http://www.nicovideo.jp/", $article["link"]);

			} else if (isset($article["stored"]["link"])) {
				$article["link"] = $article["stored"]["link"];
			}
		}

		return $article;
	}

	function api_version() {
		return 2;
	}

}
?>
