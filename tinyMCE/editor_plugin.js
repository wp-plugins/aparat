(function() {

    tinymce.create('tinymce.plugins.aparat_shortcode', {

        init : function(ed, url){
            ed.addButton('aparat_shortcode', {
                title : 'افزودن ویدئوی آپارات',
                onclick : function() {
                     ed.selection.setContent('[aparat id="'+ ed.selection.getContent() +'"]');
                },
                image: url + "/aparat.png"
            });
        },

        getInfo : function() {
            return {
                longname : 'Aparat Shrotcut',
                author : 'Nima Saberi',
                authorurl : 'http://ideyeno.ir/',
                infourl : 'https://wordpress.org/plugins/aparat/',
                version : "1.2"
            };
        }
    });

    tinymce.PluginManager.add('aparat_shortcode', tinymce.plugins.aparat_shortcode);
    
})();
