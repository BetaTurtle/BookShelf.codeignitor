 <?php
class Auth extends CI_Controller
{
    public function session($provider)
    {
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->spark('oauth2/0.3.1');

        $provider = $this->oauth2->provider($provider, array(
            'id' => '134385200041246',
            'secret' => 'c8fc1600e03794b353db3cdff42f870a',
        ));
       // $token = $provider->access($_GET['code']);
        //echo "wtf";
        //var_dump($provider);
        //$provider->authorize();
        if ( ! $this->input->get('code'))
        {
            // By sending no options it'll come back here
            echo"blim";
            $provider->authorize();
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