<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vDDd7rbXvjnn0I1E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uQAqHYfYTupbI7oQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U3C4otyleHUzqVUW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JGuVztgDLvNKaqB1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zuzzLGeuej8Pgx7K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ESsdlQaEhjI2Bf3c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login-signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ORQ1QnDmOLuDEezr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ioQdxxUk23lZVEGY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7nESDdwRHwnuKDpl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwClzocBlHphrTEr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgetPasswordSubmit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m8GRofYsrhjp0ca5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setResetPassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BuPnkmul6WGyvr64',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/demo-registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TIgPNZwF4suoieqj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/booksession' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fL29ye9yEvEb6Q06',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kTRcdBbheZkX7PCk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IhVMoRC7FNUlZBjo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wHYkYjvkG7deKfIY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tjelfLUZFWWxormH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/personalInformationSave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mDb98axBYv5a8dSy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/refer-and-earn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BGh3MR0i4QWJKcBr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/send-refer-mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVVPLNkwPsLqy3no',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/step-one-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dBhIxF071v6FL7Kg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/step-two-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SFROaOzgsHB2CEUC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/step-three-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8vqDwf9ma6tP51dr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0WAXXpRsHreKZTwy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eU30dB9cctJ5KiNR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/bookCareerSession' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3rdAgNsi42rR3C08',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c26NwE2gHCFhILIu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatePhoneNumber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kMx0MsJd4qHA12eh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8dhfKCUDeFp3n06g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/updatePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yHb6DTqGoCgQ4XKI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::htiqCEg9zr0usQwd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KWQnL3XfGg1kKmD6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order-summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ilvkijtptYyF8sJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/eight-ten-counselling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NrAgkQYtPygzzClJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ten-twelve-counselling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DMK6oMeZLh8uOHxX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/college-graduate-counselling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AOAAUKYD345P2iAn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/personality-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4L8S2oJvYr1Y8y0g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/interest-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IaG5adwxYvWRIExJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/iq-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::42RZLUGTVBfIgY8a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/aptitude-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AGltVRN3X0sCvgEB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cFee4hEUy4NrQ5Ix',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pWJmkfXKcFFsEPiB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lvqx21L9i19GceQ0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submitHelpForm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lFEw9VcbzevIO3OA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submitQueryForm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b620TvXqQfyxqLi0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribeSubmit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iwlqebanAq0cNO8R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A0U4OHUCMDSGdMyH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GyfFAnZLoa9PDrM3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/career-library' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::64Dv0stDU4WeTgxK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instant-advice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ty42OUWA21B6Zsrb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/career-library-post-dislike' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7tsTk8ifKko2mnZR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/career-library-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uCyTfHHYsbyo3HmY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1QW5ES4lgFn1dFAg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminLogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LSvMlANpfc4Ym5Au',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/404' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::doMHs2mdIzMMKEDQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cogLYvoDLQ3pyTcI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/submitForgetPasswordAdmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lMP74Vu6buDkxizF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/newPasswordSubmitAdmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HIKvuYxsziZH6S0w',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ckeditor/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ckeditor.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tUdM2xJ5kCi788JS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/admin-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wwRO1RjGD3lHZfE0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3f1S4HL1TZj053UK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/userEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aT43UrSHQug41OVQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/mark-done' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::euyohYy9D75EYIkg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/assign-counselor-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b265BygTZC4k4RVe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/session-complete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::osjstenP11s4zlks',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faqAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h3ZDuPWWdDvbXRe3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faqEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DdtNhJ8pZUS9m8FK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/testimonialAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u2GqrQhsMTwVN77x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/testimonialEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::acmtqReiUzgRmUgT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriptionPackageAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2k8vosuM7Oe00mlx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriptionPackageEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jWQuMyPD1gp765qQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roleAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XZT80JppSfR50l7n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/roleEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NdtIb7fI1S53LsZR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/role-wise-menu-access' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uerfRGCPvTb7HMdt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/adminChangePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V7x02Mum3dy9GFjB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogCategoryAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogCategoryAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogCategoryEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TvnOYrzkka5zOEzX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogSectionAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5E5OdaDMVgSOWwhh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/CareerLibraryCategoryAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'careerLibraryCategoryAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/CareerLibraryCategoryEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KBrTSNRBAJUpf60R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/CareerLibraryAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZK6un9OGQfU2ZcNF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/CareerLibraryEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fHmjWNANhJiyn8FI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/helpFaqCategoryAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'helpFaqCategoryAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/helpFaqCategoryEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'helpFaqCategoryEditSubmit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/refer\\-user/([^/]++)(*:28)|/password\\-set/([^/]++)/([^/]++)/([^/]++)(*:76)|/user/subscription\\-submit/([^/]++)(*:118)|/get\\-(?|help\\-faq\\-data/([^/]++)/([^/]++)(*:168)|library\\-data/([^/]++)/([^/]++)(*:207))|/blog(?|\\-details/([^/]++)(*:242)|/blog\\-(?|tag/([^/]++)(*:272)|category/([^/]++)(*:297))|Like/([^/]++)(*:319)|Dislike/([^/]++)(*:343))|/career\\-library\\-(?|details/([^/]++)(*:389)|post\\-like/([^/]++)(*:416))|/admin/(?|new\\-password\\-set/([^/]++)/([^/]++)/([^/]++)(*:480)|user(?|/([^/]++)(?|(*:507)|/([^/]++)(*:524))|\\-details/([^/]++)/([^/]++)(*:560))|b(?|ook\\-session/([^/]++)(*:594)|log(?|\\-(?|category/([^/]++)(?|(*:633)|/([^/]++)(*:650))|section/([^/]++)(?|(*:678)|/([^/]++)(*:695)))|CategoryDelete/([^/]++)(*:728)|Delete/([^/]++)(*:751)))|c(?|ounselling\\-session/([^/]++)(*:793)|hange\\-password/([^/]++)(*:825)|areer\\-library(?|\\-category/([^/]++)(?|(*:872)|/([^/]++)(*:889))|/([^/]++)(?|(*:910)|/([^/]++)(*:927))))|f(?|aq(?|/([^/]++)(?|(*:959)|/([^/]++)(*:976))|Delete/([^/]++)(*:1000))|orm/([^/]++)(*:1022))|testimonial(?|/([^/]++)(?|(*:1058)|/([^/]++)(*:1076))|Delete/([^/]++)(*:1101))|subscri(?|ption\\-package/([^/]++)(?|(*:1147)|/([^/]++)(*:1165))|be(?|\\-email/([^/]++)(*:1196)|EmailDelete/([^/]++)(*:1225)))|role/([^/]++)(?|(*:1252)|/([^/]++)(*:1270))|menu\\-access/([^/]++)/([^/]++)(*:1310)|delete(?|QueryForm/([^/]++)(*:1346)|HelpForm/([^/]++)(*:1372))|CareerLibrary(?|CategoryDelete/([^/]++)(*:1421)|Delete/([^/]++)(*:1445))|help(?|\\-faq\\-category/([^/]++)(?|(*:1489)|/([^/]++)(*:1507))|FaqCategoryDelete/([^/]++)(*:1543))))/?$}sDu',
    ),
    3 => 
    array (
      28 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q9XD1xmaoM4sPFoR',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tN8LDJqEIg2aCcfT',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'link',
            2 => 'linkT',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9FMbr6shDrwjxbE8',
          ),
          1 => 
          array (
            0 => 'subId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3M4XSlQnm7m8n7p6',
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D1lz2KdKYL1Zpz7D',
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'categoryId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n98pti84JUYytLNT',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S2KBUzmtMCnQqBsB',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6LBLfqWwql6wMiwp',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iPxSA9jr5uNzWW2b',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      343 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K2PBNcYJihD7XZ2A',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DF5B9H35emKBSMxs',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BucNiiaBUY2Qa7XY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1ZdYoSN9dSJe3cQ',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'link',
            2 => 'linkT',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userlistedit',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userDetails',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'booksessionAddEdit',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogCategory',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogCategoryEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogSection',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogSectionEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogCategoryDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogSectionDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'counsellingSession',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JPgCbzTvYXKGghl4',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'careerLibraryCategoryAddList',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'careerLibraryCategoryEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'careerLibraryAddList',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'careerLibraryEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqAddList',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1000 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'siteForms',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonialAddList',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonialEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonialDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriptionPackageAddList',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriptionPackageEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribeEmail',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T2ODkoHhLx7v1VUm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roleAddList',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roleEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roleMenuAccess',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a1Ff76Rj8FjmQuaN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O7F5Xpqf8LMH5me1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CareerLibraryCategoryDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CareerLibraryDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'helpFaqCategory',
          ),
          1 => 
          array (
            0 => 'show',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'helpFaqCategoryEdit',
          ),
          1 => 
          array (
            0 => 'show',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'helpFaqCategoryDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::vDDd7rbXvjnn0I1E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000681f2b21000000005d150221";}";s:4:"hash";s:44:"E+6oe8msuoM98b0uxY2037Ju+tEmYm/8jO6EBHY+ZOM=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vDDd7rbXvjnn0I1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uQAqHYfYTupbI7oQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexHome',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexHome',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uQAqHYfYTupbI7oQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U3C4otyleHUzqVUW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@redirectToFacebook',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@redirectToFacebook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U3C4otyleHUzqVUW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JGuVztgDLvNKaqB1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@handleFacebookCallback',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@handleFacebookCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JGuVztgDLvNKaqB1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zuzzLGeuej8Pgx7K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@redirectToGoogle',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@redirectToGoogle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zuzzLGeuej8Pgx7K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ESsdlQaEhjI2Bf3c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@handleGoogleCallback',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@handleGoogleCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ESsdlQaEhjI2Bf3c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ORQ1QnDmOLuDEezr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login-signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@indexAuth',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@indexAuth',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ORQ1QnDmOLuDEezr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ioQdxxUk23lZVEGY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@signupFunction',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@signupFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ioQdxxUk23lZVEGY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7nESDdwRHwnuKDpl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@loginFunction',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@loginFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7nESDdwRHwnuKDpl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q9XD1xmaoM4sPFoR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refer-user/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ReferController@referCodeFunction',
        'controller' => 'App\\Http\\Controllers\\user\\ReferController@referCodeFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Q9XD1xmaoM4sPFoR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YwClzocBlHphrTEr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexForgetPassword',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexForgetPassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YwClzocBlHphrTEr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m8GRofYsrhjp0ca5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgetPasswordSubmit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@forgetPasswordSubmitFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@forgetPasswordSubmitFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m8GRofYsrhjp0ca5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tN8LDJqEIg2aCcfT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password-set/{id}/{link}/{linkT}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@passwordSetFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@passwordSetFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tN8LDJqEIg2aCcfT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BuPnkmul6WGyvr64' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setResetPassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@setResetPasswordFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@setResetPasswordFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BuPnkmul6WGyvr64',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TIgPNZwF4suoieqj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/demo-registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@demoRegistration',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@demoRegistration',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TIgPNZwF4suoieqj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fL29ye9yEvEb6Q06' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/booksession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@booksessionFunction',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@booksessionFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fL29ye9yEvEb6Q06',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kTRcdBbheZkX7PCk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@logoutFunction',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@logoutFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kTRcdBbheZkX7PCk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IhVMoRC7FNUlZBjo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\DashboardController@indexDashboard',
        'controller' => 'App\\Http\\Controllers\\user\\DashboardController@indexDashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IhVMoRC7FNUlZBjo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wHYkYjvkG7deKfIY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@paymentCallbackFunction',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@paymentCallbackFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wHYkYjvkG7deKfIY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tjelfLUZFWWxormH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ProfileController@indexProfile',
        'controller' => 'App\\Http\\Controllers\\user\\ProfileController@indexProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tjelfLUZFWWxormH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mDb98axBYv5a8dSy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/personalInformationSave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ProfileController@personalInfoSaveFunction',
        'controller' => 'App\\Http\\Controllers\\user\\ProfileController@personalInfoSaveFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mDb98axBYv5a8dSy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BGh3MR0i4QWJKcBr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refer-and-earn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ReferController@indexRefer',
        'controller' => 'App\\Http\\Controllers\\user\\ReferController@indexRefer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BGh3MR0i4QWJKcBr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dVVPLNkwPsLqy3no' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/send-refer-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ReferController@referMailSend',
        'controller' => 'App\\Http\\Controllers\\user\\ReferController@referMailSend',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dVVPLNkwPsLqy3no',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dBhIxF071v6FL7Kg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/step-one-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ProfileController@stepOneSubmitFunction',
        'controller' => 'App\\Http\\Controllers\\user\\ProfileController@stepOneSubmitFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dBhIxF071v6FL7Kg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SFROaOzgsHB2CEUC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/step-two-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ProfileController@stepTwoSubmitFunction',
        'controller' => 'App\\Http\\Controllers\\user\\ProfileController@stepTwoSubmitFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SFROaOzgsHB2CEUC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8vqDwf9ma6tP51dr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/step-three-submit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ProfileController@stepThreeSubmitFunction',
        'controller' => 'App\\Http\\Controllers\\user\\ProfileController@stepThreeSubmitFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8vqDwf9ma6tP51dr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0WAXXpRsHreKZTwy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\PriceController@indexPrice',
        'controller' => 'App\\Http\\Controllers\\user\\PriceController@indexPrice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0WAXXpRsHreKZTwy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9FMbr6shDrwjxbE8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/subscription-submit/{subId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionSubmitFunction',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionSubmitFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9FMbr6shDrwjxbE8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eU30dB9cctJ5KiNR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SessionController@indexSession',
        'controller' => 'App\\Http\\Controllers\\user\\SessionController@indexSession',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eU30dB9cctJ5KiNR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3rdAgNsi42rR3C08' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/bookCareerSession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SessionController@bookCareerSessionFun',
        'controller' => 'App\\Http\\Controllers\\user\\SessionController@bookCareerSessionFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3rdAgNsi42rR3C08',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c26NwE2gHCFhILIu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexHelp',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexHelp',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c26NwE2gHCFhILIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kMx0MsJd4qHA12eh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updatePhoneNumber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\ProfileController@updatePhoneNumberFun',
        'controller' => 'App\\Http\\Controllers\\user\\ProfileController@updatePhoneNumberFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kMx0MsJd4qHA12eh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8dhfKCUDeFp3n06g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@indexChangePassword',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@indexChangePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8dhfKCUDeFp3n06g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yHb6DTqGoCgQ4XKI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/updatePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\AuthController@updatePasswordFun',
        'controller' => 'App\\Http\\Controllers\\user\\AuthController@updatePasswordFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yHb6DTqGoCgQ4XKI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::htiqCEg9zr0usQwd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexUserNotification',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexUserNotification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::htiqCEg9zr0usQwd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KWQnL3XfGg1kKmD6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indextest',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indextest',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KWQnL3XfGg1kKmD6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3M4XSlQnm7m8n7p6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-help-faq-data/{key}/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@getHelpFaqData',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@getHelpFaqData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3M4XSlQnm7m8n7p6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ilvkijtptYyF8sJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order-summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexOrderSummary',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexOrderSummary',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8ilvkijtptYyF8sJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NrAgkQYtPygzzClJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'eight-ten-counselling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexEightTenCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexEightTenCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NrAgkQYtPygzzClJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DMK6oMeZLh8uOHxX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ten-twelve-counselling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexTenTwelveCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexTenTwelveCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DMK6oMeZLh8uOHxX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AOAAUKYD345P2iAn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'college-graduate-counselling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexCollegeGraduateCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexCollegeGraduateCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AOAAUKYD345P2iAn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4L8S2oJvYr1Y8y0g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'personality-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexPersonalityTestCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexPersonalityTestCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4L8S2oJvYr1Y8y0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IaG5adwxYvWRIExJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'interest-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexInterestTestCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexInterestTestCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IaG5adwxYvWRIExJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::42RZLUGTVBfIgY8a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'iq-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexIqTestCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexIqTestCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::42RZLUGTVBfIgY8a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AGltVRN3X0sCvgEB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'aptitude-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexAptitudeTestCoun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexAptitudeTestCoun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AGltVRN3X0sCvgEB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cFee4hEUy4NrQ5Ix' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexTermsCondition',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexTermsCondition',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cFee4hEUy4NrQ5Ix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pWJmkfXKcFFsEPiB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexPolicy',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pWJmkfXKcFFsEPiB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lvqx21L9i19GceQ0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexAbout',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexAbout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Lvqx21L9i19GceQ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lFEw9VcbzevIO3OA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submitHelpForm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@submitHelpFormFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@submitHelpFormFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lFEw9VcbzevIO3OA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b620TvXqQfyxqLi0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submitQueryForm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@submitQueryFormFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@submitQueryFormFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::b620TvXqQfyxqLi0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iwlqebanAq0cNO8R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribeSubmit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@subscribeSubmitFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@subscribeSubmitFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iwlqebanAq0cNO8R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A0U4OHUCMDSGdMyH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexBlog',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::A0U4OHUCMDSGdMyH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n98pti84JUYytLNT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogDetails',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n98pti84JUYytLNT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GyfFAnZLoa9PDrM3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogSearch',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogSearch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GyfFAnZLoa9PDrM3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S2KBUzmtMCnQqBsB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/blog-tag/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogTagSearch',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogTagSearch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S2KBUzmtMCnQqBsB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6LBLfqWwql6wMiwp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/blog-category/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogCategorySearch',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexBlogCategorySearch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6LBLfqWwql6wMiwp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iPxSA9jr5uNzWW2b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogLike/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@blogLikeFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@blogLikeFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iPxSA9jr5uNzWW2b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K2PBNcYJihD7XZ2A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogDislike/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@blogDislikeFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@blogDislikeFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K2PBNcYJihD7XZ2A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64Dv0stDU4WeTgxK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career-library',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryIndex',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::64Dv0stDU4WeTgxK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DF5B9H35emKBSMxs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career-library-details/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryDetailsIndex',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryDetailsIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DF5B9H35emKBSMxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ty42OUWA21B6Zsrb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instant-advice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@InstantAdviceIndex',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@InstantAdviceIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ty42OUWA21B6Zsrb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1lz2KdKYL1Zpz7D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-library-data/{key}/{categoryId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@getLibraryData',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@getLibraryData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D1lz2KdKYL1Zpz7D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BucNiiaBUY2Qa7XY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career-library-post-like/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryPostLike',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryPostLike',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BucNiiaBUY2Qa7XY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7tsTk8ifKko2mnZR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'career-library-post-dislike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryPostDisLike',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@careerLibraryPostDisLike',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7tsTk8ifKko2mnZR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uCyTfHHYsbyo3HmY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'career-library-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexCareerLibrarySearch',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexCareerLibrarySearch',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uCyTfHHYsbyo3HmY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1QW5ES4lgFn1dFAg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@adminLoginIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@adminLoginIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1QW5ES4lgFn1dFAg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LSvMlANpfc4Ym5Au' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@submitLogin',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@submitLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LSvMlANpfc4Ym5Au',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::doMHs2mdIzMMKEDQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/404',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@index404',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@index404',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::doMHs2mdIzMMKEDQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cogLYvoDLQ3pyTcI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@adminForgetPasswordIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@adminForgetPasswordIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cogLYvoDLQ3pyTcI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lMP74Vu6buDkxizF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/submitForgetPasswordAdmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@submitForgetPasswordAdminFun',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@submitForgetPasswordAdminFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lMP74Vu6buDkxizF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o1ZdYoSN9dSJe3cQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/new-password-set/{id}/{link}/{linkT}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminLoginCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@adminNewPasswordIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@adminNewPasswordIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o1ZdYoSN9dSJe3cQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HIKvuYxsziZH6S0w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/newPasswordSubmitAdmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@newPasswordSubmitAdminFun',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@newPasswordSubmitAdminFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HIKvuYxsziZH6S0w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ckeditor.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ckeditor/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@uploadCkeditor',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@uploadCkeditor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ckeditor.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tUdM2xJ5kCi788JS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@adminLogout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tUdM2xJ5kCi788JS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wwRO1RjGD3lHZfE0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminDashboardController@dashboardIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminDashboardController@dashboardIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wwRO1RjGD3lHZfE0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userlistedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\UserController@indexUser',
        'controller' => 'App\\Http\\Controllers\\admin\\UserController@indexUser',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userlistedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3f1S4HL1TZj053UK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/userAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\UserController@userAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\UserController@userAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3f1S4HL1TZj053UK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\UserController@indexUserEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\UserController@indexUserEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aT43UrSHQug41OVQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/userEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\UserController@userEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\UserController@userEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aT43UrSHQug41OVQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'booksessionAddEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/book-session/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexBookSession',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexBookSession',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'booksessionAddEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'counsellingSession' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/counselling-session/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexCounsellingSession',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexCounsellingSession',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'counsellingSession',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::euyohYy9D75EYIkg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/mark-done',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@markDoneCounselling',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@markDoneCounselling',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::euyohYy9D75EYIkg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b265BygTZC4k4RVe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/assign-counselor-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@assignCounselorSession',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@assignCounselorSession',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b265BygTZC4k4RVe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::osjstenP11s4zlks' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/session-complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@sessionCompleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@sessionCompleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::osjstenP11s4zlks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userDetails' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-details/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexUserDetails',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexUserDetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'userDetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqAddList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\FaqController@indexFaq',
        'controller' => 'App\\Http\\Controllers\\admin\\FaqController@indexFaq',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faqAddList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h3ZDuPWWdDvbXRe3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faqAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\FaqController@faqAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\FaqController@faqAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::h3ZDuPWWdDvbXRe3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faq/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\FaqController@indexFaqEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\FaqController@indexFaqEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faqEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DdtNhJ8pZUS9m8FK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faqEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\FaqController@faqEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\FaqController@faqEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::DdtNhJ8pZUS9m8FK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faqDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\FaqController@faqDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\FaqController@faqDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'faqDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonialAddList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonial/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@indexTestimonial',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@indexTestimonial',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'testimonialAddList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u2GqrQhsMTwVN77x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/testimonialAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@testimonialAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@testimonialAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::u2GqrQhsMTwVN77x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonialEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonial/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@indexTestimonialEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@indexTestimonialEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'testimonialEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::acmtqReiUzgRmUgT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/testimonialEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@testimonialEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@testimonialEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::acmtqReiUzgRmUgT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonialDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonialDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@testimonialDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@testimonialDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'testimonialDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriptionPackageAddList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscription-package/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@indexSubscriptionPackage',
        'controller' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@indexSubscriptionPackage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subscriptionPackageAddList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2k8vosuM7Oe00mlx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscriptionPackageAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@subscriptionPackageAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@subscriptionPackageAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2k8vosuM7Oe00mlx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriptionPackageEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscription-package/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@indexSubscriptionPackageEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@indexSubscriptionPackageEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subscriptionPackageEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jWQuMyPD1gp765qQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscriptionPackageEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@subscriptionPackageEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\SessionSubscriptionController@subscriptionPackageEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jWQuMyPD1gp765qQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roleAddList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\RoleController@indexRole',
        'controller' => 'App\\Http\\Controllers\\admin\\RoleController@indexRole',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'roleAddList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XZT80JppSfR50l7n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roleAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\RoleController@roleAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\RoleController@roleAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XZT80JppSfR50l7n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roleEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\RoleController@indexRoleEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\RoleController@indexRoleEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'roleEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NdtIb7fI1S53LsZR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/roleEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\RoleController@roleEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\RoleController@roleEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NdtIb7fI1S53LsZR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roleMenuAccess' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/menu-access/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\RoleController@indexMenuAccess',
        'controller' => 'App\\Http\\Controllers\\admin\\RoleController@indexMenuAccess',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'roleMenuAccess',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uerfRGCPvTb7HMdt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role-wise-menu-access',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\RoleController@roleWiseMenuAccess',
        'controller' => 'App\\Http\\Controllers\\admin\\RoleController@roleWiseMenuAccess',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uerfRGCPvTb7HMdt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JPgCbzTvYXKGghl4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/change-password/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@adminChangePasswordIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@adminChangePasswordIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JPgCbzTvYXKGghl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V7x02Mum3dy9GFjB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminChangePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\LoginController@adminChangePasswordFun',
        'controller' => 'App\\Http\\Controllers\\admin\\LoginController@adminChangePasswordFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::V7x02Mum3dy9GFjB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'siteForms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/form/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@formIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@formIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'siteForms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a1Ff76Rj8FjmQuaN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteQueryForm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@deleteQueryFormFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@deleteQueryFormFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::a1Ff76Rj8FjmQuaN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O7F5Xpqf8LMH5me1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/deleteHelpForm/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@deleteHelpFormFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@deleteHelpFormFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::O7F5Xpqf8LMH5me1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribeEmail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribe-email/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@subscribeEmailIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@subscribeEmailIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'subscribeEmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T2ODkoHhLx7v1VUm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscribeEmailDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@subscribeEmailDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@subscribeEmailDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::T2ODkoHhLx7v1VUm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog-category/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogCategory',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogCategoryAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogCategoryAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@blogCategoryAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@blogCategoryAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogCategoryAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogCategoryEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog-category/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogCategoryEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogCategoryEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogCategoryEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvnOYrzkka5zOEzX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogCategoryEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@blogCategoryEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@blogCategoryEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TvnOYrzkka5zOEzX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogCategoryDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogCategoryDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@blogCategoryDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@blogCategoryDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogCategoryDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogSection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog-section/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogSection',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogSection',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogSection',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogSectionAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@blogAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@blogAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogSectionAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogSectionEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog-section/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogSectionEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@indexBlogSectionEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogSectionEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5E5OdaDMVgSOWwhh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@blogEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@blogEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5E5OdaDMVgSOWwhh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogSectionDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@blogDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@blogDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'blogSectionDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'careerLibraryCategoryAddList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/career-library-category/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexLibraryCategory',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexLibraryCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'careerLibraryCategoryAddList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'careerLibraryCategoryAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/CareerLibraryCategoryAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryCategoryAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryCategoryAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'careerLibraryCategoryAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'careerLibraryCategoryEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/career-library-category/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexCareerLibraryCategoryEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexCareerLibraryCategoryEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'careerLibraryCategoryEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KBrTSNRBAJUpf60R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/CareerLibraryCategoryEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryCategoryEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryCategoryEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KBrTSNRBAJUpf60R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CareerLibraryCategoryDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/CareerLibraryCategoryDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryCategoryDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryCategoryDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'CareerLibraryCategoryDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'careerLibraryAddList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/career-library/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexLibrary',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexLibrary',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'careerLibraryAddList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZK6un9OGQfU2ZcNF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/CareerLibraryAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZK6un9OGQfU2ZcNF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'careerLibraryEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/career-library/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexCareerLibraryEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@indexCareerLibraryEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'careerLibraryEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fHmjWNANhJiyn8FI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/CareerLibraryEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fHmjWNANhJiyn8FI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CareerLibraryDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/CareerLibraryDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CareerLibraryController@CareerLibraryDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'CareerLibraryDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'helpFaqCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/help-faq-category/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexHelpFaqCategory',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexHelpFaqCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'helpFaqCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'helpFaqCategoryAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/helpFaqCategoryAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@helpFaqCategoryAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@helpFaqCategoryAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'helpFaqCategoryAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'helpFaqCategoryEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/help-faq-category/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexHelpFaqCategoryEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexHelpFaqCategoryEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'helpFaqCategoryEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'helpFaqCategoryEditSubmit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/helpFaqCategoryEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@helpFaqCategoryEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@helpFaqCategoryEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'helpFaqCategoryEditSubmit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'helpFaqCategoryDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/helpFaqCategoryDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@helpFaqCategoryDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@helpFaqCategoryDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'helpFaqCategoryDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
