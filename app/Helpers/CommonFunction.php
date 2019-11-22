<?php
// use App\Article;
// use App\Competition;
// use App\Video;
// use App\Comparison;
// use App\Poll;
// use App\TopTen;
// use App\Quote;
// use App\SignupPopup;

use Illuminate\Http\Request;

use App\Role;

function isMobile(){
    if (isset($_SERVER["HTTP_USER_AGENT"]))
        return $mobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function removeDash($string){
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", " ", $string);
    return ucwords($string);
}

function ArrayToString($array = []){
    $string = implode(', ', $array);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", " ", $string);
    return ucwords($string);
}

// function seoUrl($string) {
//     //Lower case everything
//     $string = strtolower($string);
//     //Make alphanumeric (removes all other characters)
//     $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
//     //Clean up multiple dashes or whitespaces
//     $string = preg_replace("/[\s-]+/", " ", $string);
//     //Convert whitespaces and underscore to dash
//     $string = preg_replace("/[\s_]/", "-", $string);
//     return $string;
// }

function get_timeago($ptime)
{
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return 'Just Now';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
                );
    $a_plural = array( 'year'   => 'years',
                       'month'  => 'months',
                       'day'    => 'days',
                       'hour'   => 'hours',
                       'minute' => 'minutes',
                       'second' => 'seconds'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
}

function randomSTR($n = 35) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 


// ss
function afterFind($article, $category, $article_slug) {
    // echo '<Pre>';
    // print_r($results->toArray());
    // exit;
    $tags = array(
        // // 'grid' => 'Grid',
        // // 'tweet' => 'Article',
        'tweet' =>  Article::class,
        // // 'quote' => 'Quote',
        'topten' => TopTen::class,
        'competition' => Competition::class,
        // 'video' => Video::class,
        'comparison' => Comparison::class,
        // // 'customgraph' => CustomGraph',
        'pollquestions' => Poll::class,
        // 'pollandgraph' => Poll::class,
        // 'pollgraph' => Poll::class,
        
        // // 'leadmagnets' => 'LeadMagnet',
        'quote' => Quote::class,
        //New
        'signuppopup' => SignupPopup::class,
    );
    foreach ($tags as $tag => $model) {
        $results = processArticleWidgets($model, $tag, $article, $category, $article_slug);
    }
    return $results;
}

function assignRoleAndPermissions(Request $request, $user)
{
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // print_r($roles);

        // Get the roles
        $roles = Role::find($roles);

        
        // echo '<pre>';
        // print_r($user->toArray());
        // print_r($roles);exit;
        // print_r($permissions);
        // exit;

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }
       // exit;

        $user->syncRoles($roles);

        // echo '<pre>';
        // print_r($user->toArray());
        // exit;

        return $user;
}

?>