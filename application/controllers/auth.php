 <?php
class Auth extends CI_Controller
{
    public function session($provider)
    {
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->spark('oauth2/0.3.1');

        $site = $provider;
        if($site=="facebook"){
            $provider = $this->oauth2->provider($provider, array(
                'id' => '422953697831758',
                'secret' => 'c429dc4f7eb8d5b188e86d6dd16e172e',

            ));
        }else{
            $provider = $this->oauth2->provider($provider, array(
                'id' => '776685009882-v1kcqutjjt9k7h1e2qobjugqrgn9srel.apps.googleusercontent.com',
                'secret' => 'sDK-e4GvFjp58ZTx23c4FQjz',

            ));
        }
       // $token = $provider->access($_GET['code']);
        //echo "wtf";
        //var_dump($provider);
        //$provider->authorize();
        if ( ! $this->input->get('code'))
        {
            // By sending no options it'll come back here
            
            $url = $provider->authorize();
            echo $url;
            redirect($url);
            //header('Location: '.$url);
        }
        else
        {
            // Howzit?
           // try
            {
                $token = $provider->access($_GET['code']);

                $user = $provider->get_user_info($token);

                // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
                // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
                echo "<pre>Tokens: ";
                var_dump($token);

                echo "\n\nUser Info: ";
                var_dump($user);
            }
/*
            catch (OAuth2_Exception $e)
            {
                var_dump($e);
                show_error('That didnt work: '.$e);
            }*/

        }
    }
}   