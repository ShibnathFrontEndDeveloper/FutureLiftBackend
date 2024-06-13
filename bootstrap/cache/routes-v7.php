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
            '_route' => 'generated::U5i9xokzdV2mwnUM',
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
            '_route' => 'generated::BjMUczJ3rpY2TikZ',
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
            '_route' => 'generated::b8ouuFFBzu8CMiqT',
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
            '_route' => 'generated::57N6GGHW5INBswYj',
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
            '_route' => 'generated::gq4caQEH5Mr3zGa0',
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
            '_route' => 'generated::GNiOtgr3VOJvtDoJ',
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
            '_route' => 'generated::yHdqv6ayGLimJFvC',
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
            '_route' => 'generated::1HTWoTb8skF40HIF',
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
            '_route' => 'generated::QfmsIKCHP7lyHXA6',
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
            '_route' => 'generated::zbSM7HZJRnCQPkQ3',
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
            '_route' => 'generated::WVrNlj6JlU33KUCu',
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
            '_route' => 'generated::1Eut14JKjCvDC4U9',
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
            '_route' => 'generated::Vz4yKCYV3tP65wxd',
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
            '_route' => 'generated::Z8WihlQkZcUDqQAu',
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
      '/user/booksession-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OBENbkgTQWRQSzcJ',
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
      '/user/booksession-failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7lB9f6oLnxcH7p4J',
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
      '/user/subscription-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UGuGIfcaGrNHAsQD',
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
      '/user/subscription-failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DAkb5IIEUx81KBMN',
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
      '/instant-book' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TpPMlZnoxPXruU9T',
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
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MVhZsq8Rgy658ZrW',
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
            '_route' => 'generated::n2d3Oq5BazJTlULb',
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
            '_route' => 'generated::OCQUcBtePyyMyotB',
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
            '_route' => 'generated::tHR5MDXpv2VwUZD7',
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
            '_route' => 'generated::GMfMMLxXLltEQl6p',
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
            '_route' => 'generated::aOE23p1Vq1bmC34g',
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
            '_route' => 'generated::zLQk8Hpyk0Zzk0qr',
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
            '_route' => 'generated::xPReDSUN8WDhy1DV',
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
            '_route' => 'generated::DrK5HJAoLeCCTjqo',
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
            '_route' => 'generated::tH52M3WE2dWLiNOL',
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
            '_route' => 'generated::0BvvLBM8gErumOhs',
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
      '/user/subscription-submit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fpTvibLynC4fRQLc',
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
            '_route' => 'generated::ShrdABqRpj8Iy03R',
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
            '_route' => 'generated::c1tVjoRuo89He9KL',
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
      '/user/updatebookCareerSession' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VdL6PT8Asun1I46l',
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
            '_route' => 'generated::V5yHqPVtHqIMHUjV',
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
            '_route' => 'generated::RWyjFzlKp41K0V0b',
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
            '_route' => 'generated::dfpB9aqkVxZDAs83',
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
            '_route' => 'generated::j1YxiC8oC9YN9Wh5',
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
            '_route' => 'generated::ywVuC3ItCmV28Dv8',
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
            '_route' => 'generated::Ju0XI1AYBiIJX1jW',
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
            '_route' => 'generated::OmbZtSAteDCcx0Lh',
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
      '/coupon-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9sjc5LfZFEfmC932',
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
      '/action-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3VdC3CQxfDXmcTTt',
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
      '/submit-user-session-review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vxAw7YFXCLf7PUIA',
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
      '/eight-ten-counselling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V9vQ95fPrmszyjd0',
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
            '_route' => 'generated::xr5b6ehVGMf5Sahw',
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
            '_route' => 'generated::2PwxowstUkgJxepN',
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
            '_route' => 'generated::4EWqfNhoVNBkzliH',
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
            '_route' => 'generated::jvfGFbQ521BGtL53',
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
            '_route' => 'generated::6GJVOBrlold5fOEw',
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
            '_route' => 'generated::RzWd4PEWhFsjxJBD',
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
            '_route' => 'generated::I6Y1EnNuwLy4pATP',
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
            '_route' => 'generated::ekZP5pwheopDvxtE',
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
            '_route' => 'generated::sLDgqRj0Zhi1wnEY',
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
            '_route' => 'generated::6YakU2IuivKfz9Ha',
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
            '_route' => 'generated::3Wee2J7cScY7YHH0',
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
            '_route' => 'generated::8xb1Y3A7zDyahHLD',
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
            '_route' => 'generated::nHRWKpaTlom9LFCC',
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
            '_route' => 'generated::YBdg3zyhDcyvJRQG',
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
            '_route' => 'generated::Sr7Oq2FKusGgg8tg',
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
            '_route' => 'generated::dYA4zplmmFMXfdQL',
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
            '_route' => 'generated::HjAP34OyzEl4FDwe',
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
            '_route' => 'generated::59MkzVIL4sGMGNG7',
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
            '_route' => 'generated::iczW1S93tMYaoS8u',
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
            '_route' => 'generated::QDsQEPX70XIESDhu',
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
            '_route' => 'generated::ttCE2kxULRIUbnIP',
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
            '_route' => 'generated::ejqFSOXuf4GXZGAa',
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
            '_route' => 'generated::Cu4bVmTnVvsESkYB',
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
            '_route' => 'generated::1U0nsRX62YEF5Oo0',
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
            '_route' => 'generated::CcQHBxzZe9tJ1pi8',
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
            '_route' => 'generated::Q6lxBWOWHfHRJ7EC',
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
            '_route' => 'generated::OEPgAbjWmkj9Pnyn',
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
            '_route' => 'generated::W8H2plzC3mmMqwSU',
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
            '_route' => 'generated::ULjdTB7hlyXj2wuM',
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
            '_route' => 'generated::fgWcMwl4mtMBUoWS',
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
            '_route' => 'generated::6IST7JGDX7AafgAU',
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
            '_route' => 'generated::ryKKZCgqxAm6Qgyo',
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
            '_route' => 'generated::qOSa88KvPBPOal0x',
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
            '_route' => 'generated::gGd21AEhaiyDYhv0',
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
            '_route' => 'generated::orrkSIZIM4NDPBHp',
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
            '_route' => 'generated::6qgkyLnvPEw3AQOp',
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
            '_route' => 'generated::5FZUFdmFlllVIhxn',
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
            '_route' => 'generated::VpHmyH6qvmhV9Ivh',
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
            '_route' => 'generated::nNgEL6r5gvVEXr4d',
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
            '_route' => 'generated::gOVkfdD7r3UhfUDR',
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
            '_route' => 'generated::KBIC1A5Ucz3Dcoit',
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
            '_route' => 'generated::ZRcjZU6z33ZvKzBt',
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
            '_route' => 'generated::FlV8RTssdSO8ld1a',
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
            '_route' => 'generated::gd3sUUWJpc08QhUl',
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
            '_route' => 'generated::TCH0vxdhRhsgVKdP',
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
            '_route' => 'generated::NKOySVxs7blrR38H',
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
      '/admin/couponAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'couponAdd',
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
      '/admin/couponEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'couponEdit',
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
      '/admin/my-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ghzW5i4egXaduBKB',
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
      '/admin/adminUpdateProfile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IypySGNfWir3TEfM',
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
      '/admin/counselor-session-accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iiaR8BLJQS7fRzmu',
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
      '/admin/couselorHolidayAdd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::91NffXMQlysLaGk5',
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
      '/admin/couselorHolidayEdit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::74ddEclxTFtOqidA',
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
      '/admin/my-earning-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S3Pk0SNUCdj65KUB',
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
      '/admin/admin-help' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CixAfi5F3xXFLJKf',
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
    ),
    2 => 
    array (
      0 => '{^(?|/refer\\-user/([^/]++)(*:28)|/password\\-set/([^/]++)/([^/]++)/([^/]++)(*:76)|/user\\-review/([^/]++)(*:105)|/get\\-(?|help\\-faq\\-data/([^/]++)/([^/]++)(*:155)|library\\-data/([^/]++)/([^/]++)(*:194))|/blog(?|\\-details/([^/]++)(*:229)|/blog\\-(?|tag/([^/]++)(*:259)|category/([^/]++)(*:284))|Like/([^/]++)(*:306)|Dislike/([^/]++)(*:330))|/career\\-library\\-(?|details/([^/]++)(*:376)|post\\-like/([^/]++)(*:403))|/admin/(?|new\\-password\\-set/([^/]++)/([^/]++)/([^/]++)(*:467)|user(?|/([^/]++)(?|(*:494)|/([^/]++)(*:511))|\\-(?|details/([^/]++)/([^/]++)(*:550)|review\\-details/([^/]++)/([^/]++)/([^/]++)(*:600)))|b(?|ook\\-session/([^/]++)(*:635)|log(?|\\-(?|category/([^/]++)(?|(*:674)|/([^/]++)(*:691))|section/([^/]++)(?|(*:719)|/([^/]++)(*:736)))|CategoryDelete/([^/]++)(*:769)|Delete/([^/]++)(*:792)))|c(?|ou(?|nsel(?|ling\\-session/([^/]++)(*:840)|or\\-details/([^/]++)/([^/]++)(*:877))|pon(?|/([^/]++)(?|(*:904)|/([^/]++)(*:921))|Delete/([^/]++)(*:945)))|hange\\-password/([^/]++)(*:979)|areer\\-library(?|\\-category/([^/]++)(?|(*:1026)|/([^/]++)(*:1044))|/([^/]++)(?|(*:1066)|/([^/]++)(*:1084))))|f(?|aq(?|/([^/]++)(?|(*:1117)|/([^/]++)(*:1135))|Delete/([^/]++)(*:1160))|orm/([^/]++)(*:1182))|testimonial(?|/([^/]++)(?|(*:1218)|/([^/]++)(*:1236))|Delete/([^/]++)(*:1261))|subscri(?|ption\\-package/([^/]++)(?|(*:1307)|/([^/]++)(*:1325))|be(?|\\-email/([^/]++)(*:1356)|EmailDelete/([^/]++)(*:1385)))|role/([^/]++)(?|(*:1412)|/([^/]++)(*:1430))|m(?|enu\\-access/([^/]++)/([^/]++)(*:1473)|y(?|\\-holiday/([^/]++)(?|(*:1507)|/([^/]++)(*:1525))|HolidayDelete/([^/]++)(*:1557)))|delete(?|QueryForm/([^/]++)(*:1595)|HelpForm/([^/]++)(*:1621))|CareerLibrary(?|CategoryDelete/([^/]++)(*:1670)|Delete/([^/]++)(*:1694))|help(?|\\-faq\\-category/([^/]++)(?|(*:1738)|/([^/]++)(*:1756))|FaqCategoryDelete/([^/]++)(*:1792))|get\\-help\\-category\\-section\\-data/([^/]++)(*:1845)))/?$}sDu',
    ),
    3 => 
    array (
      28 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N7HQU5oKgzOzhlld',
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
            '_route' => 'generated::m2V05T27awiZehXj',
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
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JJ0pQY7FjBDue7NZ',
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
      155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dOvBSHvsjDusYnsr',
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
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3PgypoQOMNCKwwaz',
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
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rpEsynoZw8syUbmE',
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
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tgdQ9cjmnansbFSY',
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
      284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNSo8brjTfMLYmDT',
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
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Z68i20u3KMsmMd5',
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
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Gasu27uD697aNPc',
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
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qxb4ynrvCMp1ESfB',
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
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q4TrjhUTzRFNkvc1',
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
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4w5RbiedKPmU9rLm',
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
      494 => 
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
      511 => 
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
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6a5KFdwwzHxhik4Y',
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
      600 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Wk38fqbv5A9AaxO',
          ),
          1 => 
          array (
            0 => 'userId',
            1 => 'sessionId',
            2 => 'key',
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
      635 => 
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
      674 => 
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
      691 => 
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
      719 => 
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
      736 => 
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
      769 => 
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
      792 => 
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
      840 => 
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
      877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aMLWVYH5CuQBwE5z',
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
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'indexCouponList',
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
      921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'couponEditindex',
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
      945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'couponDelete',
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
      979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eAYL6aUqU1ABzpLo',
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
      1026 => 
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
      1044 => 
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
      1066 => 
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
      1084 => 
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
      1117 => 
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
      1135 => 
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
      1160 => 
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
      1182 => 
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
      1218 => 
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
      1236 => 
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
      1261 => 
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
      1307 => 
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
      1325 => 
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
      1356 => 
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
      1385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EYHdtZAy7lplIIUM',
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
      1412 => 
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
      1430 => 
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
      1473 => 
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
      1507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l2UVQ4ScCM9IRmys',
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
      1525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wQFPzw81hHf6N0dc',
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
      1557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o2n09yA2VVUl5hbi',
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
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WMOtcFkRKpNwylx0',
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
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ssTslAbtjfRqdTJU',
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
      1670 => 
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
      1694 => 
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
      1738 => 
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
      1756 => 
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
      1792 => 
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
      ),
      1845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2i7nV34g6urwLFl',
          ),
          1 => 
          array (
            0 => 'section',
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
    'generated::U5i9xokzdV2mwnUM' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000424bfebb000000004f3cc8eb";}";s:4:"hash";s:44:"jtTvzgz76941ch8NI0Mxrp4d2X420EYCiVnCFISkiw0=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::U5i9xokzdV2mwnUM',
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
    'generated::BjMUczJ3rpY2TikZ' => 
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
        'as' => 'generated::BjMUczJ3rpY2TikZ',
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
    'generated::b8ouuFFBzu8CMiqT' => 
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
        'as' => 'generated::b8ouuFFBzu8CMiqT',
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
    'generated::57N6GGHW5INBswYj' => 
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
        'as' => 'generated::57N6GGHW5INBswYj',
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
    'generated::gq4caQEH5Mr3zGa0' => 
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
        'as' => 'generated::gq4caQEH5Mr3zGa0',
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
    'generated::GNiOtgr3VOJvtDoJ' => 
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
        'as' => 'generated::GNiOtgr3VOJvtDoJ',
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
    'generated::yHdqv6ayGLimJFvC' => 
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
        'as' => 'generated::yHdqv6ayGLimJFvC',
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
    'generated::1HTWoTb8skF40HIF' => 
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
        'as' => 'generated::1HTWoTb8skF40HIF',
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
    'generated::QfmsIKCHP7lyHXA6' => 
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
        'as' => 'generated::QfmsIKCHP7lyHXA6',
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
    'generated::N7HQU5oKgzOzhlld' => 
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
        'as' => 'generated::N7HQU5oKgzOzhlld',
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
    'generated::zbSM7HZJRnCQPkQ3' => 
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
        'as' => 'generated::zbSM7HZJRnCQPkQ3',
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
    'generated::WVrNlj6JlU33KUCu' => 
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
        'as' => 'generated::WVrNlj6JlU33KUCu',
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
    'generated::m2V05T27awiZehXj' => 
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
        'as' => 'generated::m2V05T27awiZehXj',
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
    'generated::1Eut14JKjCvDC4U9' => 
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
        'as' => 'generated::1Eut14JKjCvDC4U9',
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
    'generated::Vz4yKCYV3tP65wxd' => 
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
        'as' => 'generated::Vz4yKCYV3tP65wxd',
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
    'generated::Z8WihlQkZcUDqQAu' => 
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
        'as' => 'generated::Z8WihlQkZcUDqQAu',
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
    'generated::OBENbkgTQWRQSzcJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/booksession-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@booksessionSuccess',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@booksessionSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OBENbkgTQWRQSzcJ',
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
    'generated::7lB9f6oLnxcH7p4J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/booksession-failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@booksessionFailed',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@booksessionFailed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7lB9f6oLnxcH7p4J',
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
    'generated::UGuGIfcaGrNHAsQD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionSuccessFunction',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionSuccessFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UGuGIfcaGrNHAsQD',
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
    'generated::DAkb5IIEUx81KBMN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription-failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionFailedFunction',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionFailedFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DAkb5IIEUx81KBMN',
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
    'generated::TpPMlZnoxPXruU9T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instant-book',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@instantBookIndex',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@instantBookIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TpPMlZnoxPXruU9T',
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
    'generated::MVhZsq8Rgy658ZrW' => 
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
        'as' => 'generated::MVhZsq8Rgy658ZrW',
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
    'generated::n2d3Oq5BazJTlULb' => 
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
        'as' => 'generated::n2d3Oq5BazJTlULb',
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
    'generated::OCQUcBtePyyMyotB' => 
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
        'as' => 'generated::OCQUcBtePyyMyotB',
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
    'generated::tHR5MDXpv2VwUZD7' => 
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
        'as' => 'generated::tHR5MDXpv2VwUZD7',
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
    'generated::GMfMMLxXLltEQl6p' => 
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
        'as' => 'generated::GMfMMLxXLltEQl6p',
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
    'generated::aOE23p1Vq1bmC34g' => 
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
        'as' => 'generated::aOE23p1Vq1bmC34g',
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
    'generated::zLQk8Hpyk0Zzk0qr' => 
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
        'as' => 'generated::zLQk8Hpyk0Zzk0qr',
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
    'generated::xPReDSUN8WDhy1DV' => 
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
        'as' => 'generated::xPReDSUN8WDhy1DV',
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
    'generated::DrK5HJAoLeCCTjqo' => 
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
        'as' => 'generated::DrK5HJAoLeCCTjqo',
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
    'generated::tH52M3WE2dWLiNOL' => 
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
        'as' => 'generated::tH52M3WE2dWLiNOL',
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
    'generated::0BvvLBM8gErumOhs' => 
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
        'as' => 'generated::0BvvLBM8gErumOhs',
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
    'generated::fpTvibLynC4fRQLc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/subscription-submit',
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
        'as' => 'generated::fpTvibLynC4fRQLc',
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
    'generated::ShrdABqRpj8Iy03R' => 
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
        'as' => 'generated::ShrdABqRpj8Iy03R',
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
    'generated::c1tVjoRuo89He9KL' => 
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
        'as' => 'generated::c1tVjoRuo89He9KL',
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
    'generated::VdL6PT8Asun1I46l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/updatebookCareerSession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SessionController@updatebookCareerSessionFun',
        'controller' => 'App\\Http\\Controllers\\user\\SessionController@updatebookCareerSessionFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VdL6PT8Asun1I46l',
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
    'generated::V5yHqPVtHqIMHUjV' => 
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
        'as' => 'generated::V5yHqPVtHqIMHUjV',
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
    'generated::RWyjFzlKp41K0V0b' => 
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
        'as' => 'generated::RWyjFzlKp41K0V0b',
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
    'generated::dfpB9aqkVxZDAs83' => 
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
        'as' => 'generated::dfpB9aqkVxZDAs83',
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
    'generated::j1YxiC8oC9YN9Wh5' => 
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
        'as' => 'generated::j1YxiC8oC9YN9Wh5',
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
    'generated::ywVuC3ItCmV28Dv8' => 
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
        'as' => 'generated::ywVuC3ItCmV28Dv8',
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
    'generated::Ju0XI1AYBiIJX1jW' => 
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
        'as' => 'generated::Ju0XI1AYBiIJX1jW',
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
    'generated::OmbZtSAteDCcx0Lh' => 
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
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@indexOrderSummary',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@indexOrderSummary',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OmbZtSAteDCcx0Lh',
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
    'generated::9sjc5LfZFEfmC932' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coupon-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@couponReqFun',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@couponReqFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9sjc5LfZFEfmC932',
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
    'generated::JJ0pQY7FjBDue7NZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-review/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexuserreview',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexuserreview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JJ0pQY7FjBDue7NZ',
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
    'generated::3VdC3CQxfDXmcTTt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'action-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@indexUserActionPlan',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@indexUserActionPlan',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3VdC3CQxfDXmcTTt',
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
    'generated::vxAw7YFXCLf7PUIA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-user-session-review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@submitUserSessionReviewFun',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@submitUserSessionReviewFun',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vxAw7YFXCLf7PUIA',
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
    'generated::dOvBSHvsjDusYnsr' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\user\\HomeController@getHelpFaqData',
        'controller' => 'App\\Http\\Controllers\\user\\HomeController@getHelpFaqData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dOvBSHvsjDusYnsr',
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
    'generated::V9vQ95fPrmszyjd0' => 
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
        'as' => 'generated::V9vQ95fPrmszyjd0',
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
    'generated::xr5b6ehVGMf5Sahw' => 
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
        'as' => 'generated::xr5b6ehVGMf5Sahw',
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
    'generated::2PwxowstUkgJxepN' => 
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
        'as' => 'generated::2PwxowstUkgJxepN',
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
    'generated::4EWqfNhoVNBkzliH' => 
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
        'as' => 'generated::4EWqfNhoVNBkzliH',
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
    'generated::jvfGFbQ521BGtL53' => 
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
        'as' => 'generated::jvfGFbQ521BGtL53',
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
    'generated::6GJVOBrlold5fOEw' => 
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
        'as' => 'generated::6GJVOBrlold5fOEw',
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
    'generated::RzWd4PEWhFsjxJBD' => 
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
        'as' => 'generated::RzWd4PEWhFsjxJBD',
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
    'generated::I6Y1EnNuwLy4pATP' => 
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
        'as' => 'generated::I6Y1EnNuwLy4pATP',
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
    'generated::ekZP5pwheopDvxtE' => 
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
        'as' => 'generated::ekZP5pwheopDvxtE',
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
    'generated::sLDgqRj0Zhi1wnEY' => 
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
        'as' => 'generated::sLDgqRj0Zhi1wnEY',
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
    'generated::6YakU2IuivKfz9Ha' => 
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
        'as' => 'generated::6YakU2IuivKfz9Ha',
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
    'generated::3Wee2J7cScY7YHH0' => 
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
        'as' => 'generated::3Wee2J7cScY7YHH0',
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
    'generated::8xb1Y3A7zDyahHLD' => 
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
        'as' => 'generated::8xb1Y3A7zDyahHLD',
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
    'generated::nHRWKpaTlom9LFCC' => 
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
        'as' => 'generated::nHRWKpaTlom9LFCC',
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
    'generated::rpEsynoZw8syUbmE' => 
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
        'as' => 'generated::rpEsynoZw8syUbmE',
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
    'generated::YBdg3zyhDcyvJRQG' => 
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
        'as' => 'generated::YBdg3zyhDcyvJRQG',
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
    'generated::tgdQ9cjmnansbFSY' => 
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
        'as' => 'generated::tgdQ9cjmnansbFSY',
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
    'generated::DNSo8brjTfMLYmDT' => 
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
        'as' => 'generated::DNSo8brjTfMLYmDT',
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
    'generated::8Z68i20u3KMsmMd5' => 
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
        'as' => 'generated::8Z68i20u3KMsmMd5',
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
    'generated::2Gasu27uD697aNPc' => 
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
        'as' => 'generated::2Gasu27uD697aNPc',
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
    'generated::Sr7Oq2FKusGgg8tg' => 
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
        'as' => 'generated::Sr7Oq2FKusGgg8tg',
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
    'generated::Qxb4ynrvCMp1ESfB' => 
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
        'as' => 'generated::Qxb4ynrvCMp1ESfB',
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
    'generated::dYA4zplmmFMXfdQL' => 
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
        'as' => 'generated::dYA4zplmmFMXfdQL',
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
    'generated::3PgypoQOMNCKwwaz' => 
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
        'as' => 'generated::3PgypoQOMNCKwwaz',
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
    'generated::Q4TrjhUTzRFNkvc1' => 
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
        'as' => 'generated::Q4TrjhUTzRFNkvc1',
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
    'generated::HjAP34OyzEl4FDwe' => 
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
        'as' => 'generated::HjAP34OyzEl4FDwe',
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
    'generated::59MkzVIL4sGMGNG7' => 
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
        'as' => 'generated::59MkzVIL4sGMGNG7',
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
    'generated::iczW1S93tMYaoS8u' => 
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
        'as' => 'generated::iczW1S93tMYaoS8u',
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
    'generated::QDsQEPX70XIESDhu' => 
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
        'as' => 'generated::QDsQEPX70XIESDhu',
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
    'generated::ttCE2kxULRIUbnIP' => 
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
        'as' => 'generated::ttCE2kxULRIUbnIP',
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
    'generated::ejqFSOXuf4GXZGAa' => 
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
        'as' => 'generated::ejqFSOXuf4GXZGAa',
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
    'generated::Cu4bVmTnVvsESkYB' => 
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
        'as' => 'generated::Cu4bVmTnVvsESkYB',
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
    'generated::4w5RbiedKPmU9rLm' => 
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
        'as' => 'generated::4w5RbiedKPmU9rLm',
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
    'generated::1U0nsRX62YEF5Oo0' => 
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
        'as' => 'generated::1U0nsRX62YEF5Oo0',
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
    'generated::CcQHBxzZe9tJ1pi8' => 
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
        'as' => 'generated::CcQHBxzZe9tJ1pi8',
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
    'generated::Q6lxBWOWHfHRJ7EC' => 
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
        'as' => 'generated::Q6lxBWOWHfHRJ7EC',
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
    'generated::OEPgAbjWmkj9Pnyn' => 
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
        'as' => 'generated::OEPgAbjWmkj9Pnyn',
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
    'generated::W8H2plzC3mmMqwSU' => 
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
        'as' => 'generated::W8H2plzC3mmMqwSU',
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
    'generated::ULjdTB7hlyXj2wuM' => 
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
        'as' => 'generated::ULjdTB7hlyXj2wuM',
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
    'generated::fgWcMwl4mtMBUoWS' => 
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
        'as' => 'generated::fgWcMwl4mtMBUoWS',
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
    'generated::6IST7JGDX7AafgAU' => 
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
        'as' => 'generated::6IST7JGDX7AafgAU',
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
    'generated::6a5KFdwwzHxhik4Y' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexUserDetails',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexUserDetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6a5KFdwwzHxhik4Y',
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
    'generated::aMLWVYH5CuQBwE5z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/counselor-details/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexCounselorDetails',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexCounselorDetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aMLWVYH5CuQBwE5z',
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
    'generated::ryKKZCgqxAm6Qgyo' => 
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
        'as' => 'generated::ryKKZCgqxAm6Qgyo',
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
    'generated::qOSa88KvPBPOal0x' => 
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
        'as' => 'generated::qOSa88KvPBPOal0x',
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
    'generated::gGd21AEhaiyDYhv0' => 
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
        'as' => 'generated::gGd21AEhaiyDYhv0',
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
    'generated::orrkSIZIM4NDPBHp' => 
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
        'as' => 'generated::orrkSIZIM4NDPBHp',
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
    'generated::6qgkyLnvPEw3AQOp' => 
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
        'as' => 'generated::6qgkyLnvPEw3AQOp',
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
    'generated::5FZUFdmFlllVIhxn' => 
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
        'as' => 'generated::5FZUFdmFlllVIhxn',
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
    'generated::VpHmyH6qvmhV9Ivh' => 
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
        'as' => 'generated::VpHmyH6qvmhV9Ivh',
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
    'generated::nNgEL6r5gvVEXr4d' => 
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
        'as' => 'generated::nNgEL6r5gvVEXr4d',
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
    'generated::gOVkfdD7r3UhfUDR' => 
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
        'as' => 'generated::gOVkfdD7r3UhfUDR',
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
    'generated::eAYL6aUqU1ABzpLo' => 
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
        'as' => 'generated::eAYL6aUqU1ABzpLo',
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
    'generated::KBIC1A5Ucz3Dcoit' => 
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
        'as' => 'generated::KBIC1A5Ucz3Dcoit',
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
    'generated::WMOtcFkRKpNwylx0' => 
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
        'as' => 'generated::WMOtcFkRKpNwylx0',
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
    'generated::ssTslAbtjfRqdTJU' => 
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
        'as' => 'generated::ssTslAbtjfRqdTJU',
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
    'generated::EYHdtZAy7lplIIUM' => 
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
        'as' => 'generated::EYHdtZAy7lplIIUM',
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
    'generated::ZRcjZU6z33ZvKzBt' => 
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
        'as' => 'generated::ZRcjZU6z33ZvKzBt',
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
    'generated::FlV8RTssdSO8ld1a' => 
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
        'as' => 'generated::FlV8RTssdSO8ld1a',
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
    'generated::gd3sUUWJpc08QhUl' => 
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
        'as' => 'generated::gd3sUUWJpc08QhUl',
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
    'generated::TCH0vxdhRhsgVKdP' => 
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
        'as' => 'generated::TCH0vxdhRhsgVKdP',
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
    'generated::NKOySVxs7blrR38H' => 
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
        'as' => 'generated::NKOySVxs7blrR38H',
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
    'indexCouponList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CouponController@indexCoupon',
        'controller' => 'App\\Http\\Controllers\\admin\\CouponController@indexCoupon',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'indexCouponList',
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
    'couponAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/couponAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CouponController@couponAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CouponController@couponAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'couponAdd',
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
    'couponEditindex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/coupon/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CouponController@indexcouponEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\CouponController@indexcouponEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'couponEditindex',
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
    'couponEdit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/couponEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CouponController@couponEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CouponController@couponEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'couponEdit',
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
    'couponDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/couponDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
          2 => 'adminUrlCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CouponController@couponDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\CouponController@couponDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'couponDelete',
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
    'generated::ghzW5i4egXaduBKB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/my-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@myProfileIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@myProfileIndex',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ghzW5i4egXaduBKB',
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
    'generated::IypySGNfWir3TEfM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/adminUpdateProfile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@adminUpdateProfileFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@adminUpdateProfileFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IypySGNfWir3TEfM',
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
    'generated::iiaR8BLJQS7fRzmu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/counselor-session-accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@counselorSessionAcceptFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@counselorSessionAcceptFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iiaR8BLJQS7fRzmu',
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
    'generated::l2UVQ4ScCM9IRmys' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/my-holiday/{show}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexMyHoliday',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexMyHoliday',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::l2UVQ4ScCM9IRmys',
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
    'generated::91NffXMQlysLaGk5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/couselorHolidayAdd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@couselorHolidayAddFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@couselorHolidayAddFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::91NffXMQlysLaGk5',
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
    'generated::wQFPzw81hHf6N0dc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/my-holiday/{show}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexMyHolidayEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexMyHolidayEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wQFPzw81hHf6N0dc',
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
    'generated::74ddEclxTFtOqidA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/couselorHolidayEdit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@couselorHolidayEditFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@couselorHolidayEditFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::74ddEclxTFtOqidA',
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
    'generated::o2n09yA2VVUl5hbi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/myHolidayDelete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@myHolidayDeleteFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@myHolidayDeleteFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::o2n09yA2VVUl5hbi',
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
    'generated::S3Pk0SNUCdj65KUB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/my-earning-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexEarningHistory',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexEarningHistory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::S3Pk0SNUCdj65KUB',
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
    'generated::1Wk38fqbv5A9AaxO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user-review-details/{userId}/{sessionId}/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexUserReviewDetails',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexUserReviewDetails',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1Wk38fqbv5A9AaxO',
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
    'generated::CixAfi5F3xXFLJKf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin-help',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@indexAdminHelp',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@indexAdminHelp',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CixAfi5F3xXFLJKf',
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
    'generated::d2i7nV34g6urwLFl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/get-help-category-section-data/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'adminAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\MainController@getHelpCategorySectionDataFun',
        'controller' => 'App\\Http\\Controllers\\admin\\MainController@getHelpCategorySectionDataFun',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::d2i7nV34g6urwLFl',
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
