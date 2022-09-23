<?php

//view altındaki index açılacak

if(isset($_POST['submit'])){

    $html = '<?php' . PHP_EOL . PHP_EOL;

    foreach(post('site_settings') as $k => $v){
        // $html devam ediyoruz
        $html .= '$site_settings["' . $k . '"] = "' . $v . '";' . PHP_EOL;
        file_put_contents(PATH . '/app/site_settings.php', $html);
        header(admin_url('settings'));
    }


}

require admin_view('pages/settings');