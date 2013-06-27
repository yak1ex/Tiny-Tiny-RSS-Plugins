<?php
class GoogleReaderKeys extends Plugin {
	private $host;

	function about() {
		return array(1.1,
			"Keyboard hotkeys emulate Google Reader",
			"markwaters");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_HOTKEY_MAP, $this);
	}

	function hook_hotkey_map($hotkeys) {

//		             		                           // original key binding
		$hotkeys["j"]		= "next_article_noscroll"; // prev_feed
		$hotkeys["k"]		= "prev_article_noscroll"; // next_feed
		$hotkeys["n"]		= "next_article_noexpand"; // next_article
		$hotkeys["p"]		= "prev_article_noexpand"; // prev_article
		$hotkeys["*n"]		= "next_feed";             // article_scroll_down
		$hotkeys["*p"]		= "prev_feed";             // article_scroll_up
		$hotkeys["v"]		= "open_in_new_window";
		$hotkeys["r"]		= "feed_refresh";
//		$hotkeys["s"]		= "toggle_mark";           // no change
//		$hotkeys["*s"]		= "toggle_publ";           // no change
		$hotkeys["m"]		= "toggle_unread";
		$hotkeys["t"]		= "edit_tags";
		$hotkeys["o"]		= "toggle_expand";         // open_in_new_window
		$hotkeys["(13)|enter"]	= "toggle_expand";
		$hotkeys["*a"]		= "feed_catchup";
		$hotkeys["1"]		= "toggle_cdm_expanded";
		$hotkeys["2"]		= "toggle_cdm_expanded";
		$hotkeys["r"]		= "feed_refresh";
		$hotkeys["*(191)|?"]    = "help_dialog";
		$hotkeys["(32)|space"]	= "next_article";
		$hotkeys["(38)|up"]	= "article_scroll_up";     // prev_article
		$hotkeys["(40)|down"]	= "article_scroll_down";   // next_article

		return $hotkeys;
	}

	function api_version() {
		return 2;
	}

}
?>
