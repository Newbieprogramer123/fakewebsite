function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: 'id', // Bahasa default: Indonesia
            includedLanguages: 'en,zh-CN,ja,fr,ko', // Bahasa yang didukung
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        },
        'google_translate_element'
    );
}
