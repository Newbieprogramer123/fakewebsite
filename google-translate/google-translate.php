<?php
/**
 * Plugin Name: Google Translate Integration Persistent
 * Plugin URI: https://rnd.wirglobal.com/
 * Description: Adds persistent Google Translate functionality to the website.
 * Version: 1.1
 * Author: R&D
 * Author URI: https://rnd.wirglobal.com/
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Menghentikan akses langsung ke file
}

// Fungsi untuk menambahkan Google Translate widget
function google_translate_persistent_widget() {
    ?>
    <div id="google_translate_element" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000; background-color: #fff; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    </div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: "en",
                includedLanguages: "id,en,zh-CN,ja,fr,ko",
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, "google_translate_element");
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <?php
}
add_action("wp_footer", "google_translate_persistent_widget");

// Fungsi untuk menambahkan CSS khusus
function google_translate_styles() {
    wp_enqueue_style("google-translate-style", plugins_url("css/style.css", __FILE__));
}
add_action("wp_enqueue_scripts", "google_translate_styles");
