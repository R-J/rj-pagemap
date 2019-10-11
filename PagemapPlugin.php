<?php

namespace RJPlugins;

use Gdn;
use Gdn_Plugin;

class PagemapPlugin extends Gdn_Plugin {
    public function base_afterBody_handler($sender) {
        echo '<script src="'.$this->getWebResource('js/pagemap.min.js').'"></script>';
        echo '<canvas id="rj-pagemap"></canvas>';
        echo '<style>#rj-pagemap {
            position: fixed;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            z-index: 100;
        }</style>';
        echo '<script>
            pagemap(document.querySelector("#rj-pagemap"), {
            viewport: null,
            styles: {
                \'div.ItemContent.Category,h1,header,footer,section,article\': \'rgba(0,0,0,0.10)\',
                \'img.ProfilePhoto,.Button\': \'rgba(0,0,0,0.3)\',
                \'div.Item-Header,div.TitleWrap,div.Title,.Panel h4\': \'rgba(0,0,0,0.15)\',
                \'div.Message p,div.CategoryDescription,.Panel a\': \'rgba(0,0,0,0.06)\',
                \'.TextBoxWrapper\': \'rgba(0,0,0,0.01)\'
            },
            back: \'rgba(0,0,0,0.02)\',
            view: \'rgba(0,0,0,0.05)\',
            drag: \'rgba(0,0,0,0.10)\',
            interval: null
        });</script>';
    }
}
