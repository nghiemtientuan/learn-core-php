/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';       

    config.filebrowserBrowseUrl= 'http://localhost/tntstudio/quantri/ckeditor/ckfinder/ckfinder.html';
        config.filebrowserImageBrowseUrl= 'http://localhost/tntstudio/quantri/ckeditor/ckfinder/ckfinder.html?type=Images';
        config.filebrowserUploadUrl=
    'http://localhost/tntstudio/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/archive/';
        config.filebrowserImageUploadUrl=
    'http://localhost/tntstudio/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/';
};
