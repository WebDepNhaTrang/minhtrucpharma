tinymce.init({
    menubar: false,
    selector:'textarea.richTextBox',
    skin: 'voyager',
    min_height: 300,
    resize: 'vertical',
    plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
    extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
    file_browser_callback: function(field_name, url, type, win) {
            if(type =='image'){
              $('#upload_file').trigger('click');
            }
        },
    toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code | fontselect | fontsizeselect',
    font_formats: 'Arial=arial',
    fontsize_formats: '8px 10px 12px 14px 18px 24px 36px',
    convert_urls: false,
    image_caption: true,
    image_title: true,
    init_instance_callback: function (editor) {
        if (typeof tinymce_init_callback !== "undefined") {
            tinymce_init_callback(editor);
        }
    }
  });