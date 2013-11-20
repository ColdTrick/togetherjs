<?php

// register default Elgg events
elgg_register_event_handler("init", "system", "togetherjs_init");
elgg_register_event_handler("pagesetup", "system", "togetherjs_pagesetup");

function togetherjs_init(){
	elgg_register_js("togetherjs", "https://togetherjs.com/togetherjs-min.js");
}

function togetherjs_pagesetup() {
	elgg_load_js("togetherjs");
	elgg_register_menu_item("footer", ElggMenuItem::factory(array(
				"name" => "togetherjs",
				"href" => "javascript:TogetherJS(this)",
				"text" => "Start TogetherJS",
				"section" => "alt"
			)));
}