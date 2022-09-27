<div class="menu">
    <div class="menu-close">
        <div></div>
        <div></div>
    </div>
    <?php
        $menu = '';
        foreach ($pages as $page) {
            if($page['parent_id'] == 0) {
                $id = $page['id'];
                $menu .= '<div class="menu-item"><h2>' . $page['h1'] . '</h2>';
                $arr_childs = array_filter($pages, function($arr_parent) use ($id){
                    return ($arr_parent['parent_id'] == $id);
                });
                if(isset($arr_childs)){
                    $menu .= '<nav><ul>';
                    foreach ($arr_childs as $child) {
                        $menu .= '<li><a href="'.$child['url'].'">'.$child['h1'].'</a></li>';
                    }
                    $menu .= '</nav></ul>';
                }
                $menu .= '</div>';
            }
        }
        echo $menu;
    ?>
</div>