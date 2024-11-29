function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: 'en',
            includedLanguages: 'en,zh-CN,ja,fr,ko,ar', // Indonesia, Inggris, China (Simplified), Jepang, Prancis
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        },
        'google_translate_element'
    );
}
