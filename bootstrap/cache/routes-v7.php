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
            '_route' => 'generated::YOvXKZR0pMNfMgHj',
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
            '_route' => 'generated::Fjmjb2wqDxy05jS0',
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
            '_route' => 'generated::AquQ0jPyOklOVTRe',
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
            '_route' => 'generated::VeS2OLBUQk6EVZEq',
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
            '_route' => 'generated::4XjtDj6Jv560lc8v',
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
            '_route' => 'generated::7cSgij4IQmHYtrt0',
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
            '_route' => 'generated::7gFE7PM1Rd8irzRJ',
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
            '_route' => 'generated::3sltqpsGDKkRHCc4',
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
            '_route' => 'generated::CDIxn2hkddemdamV',
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
            '_route' => 'generated::mq0QiYmGjIxooSfE',
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
            '_route' => 'generated::xkBeGwxHrdQciTYH',
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
            '_route' => 'generated::txznqAUhVkPTucXM',
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
            '_route' => 'generated::w2upaRcorE8Xnn1m',
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
            '_route' => 'generated::gq2sp2gE6UzKvc8h',
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
            '_route' => 'generated::PmQeBMnRCiQ0wYZS',
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
            '_route' => 'generated::sPksp6ukHPWYU2gB',
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
            '_route' => 'generated::PcRcHbHahmMkOK5n',
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
            '_route' => 'generated::5pApD7JDeJNQ0qNG',
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
            '_route' => 'generated::JJwluuTnoLVhTSce',
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
            '_route' => 'generated::cff8OzuUOdKSWULx',
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
            '_route' => 'generated::38QVKpxftNMF8H91',
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
            '_route' => 'generated::qCcxZKxmlVjoYahu',
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
            '_route' => 'generated::JW6XPPi7iBVuejix',
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
            '_route' => 'generated::zpmwCFkPFliin5Gt',
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
            '_route' => 'generated::8FYdInOdfSr9kZzC',
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
            '_route' => 'generated::PZJdPCL2f1Bcj3oO',
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
            '_route' => 'generated::yVFy9oOqOeqK60U8',
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
            '_route' => 'generated::z6NaWjhZs4V16hk5',
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
            '_route' => 'generated::YzBzANcXGddXZbDc',
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
      '/user/subscription-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IyPfj7EN8UYmN9ad',
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
            '_route' => 'generated::SICjz2PyG34Xgn3M',
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
      '/session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yxqmnUBALyyEILEn',
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
            '_route' => 'generated::yuN36trqD1v3psNw',
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
            '_route' => 'generated::iFBvvHkOZLGLBCJJ',
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
            '_route' => 'generated::zf7zYwRDrtgKNpQb',
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
            '_route' => 'generated::fh7Joz56KyqvCK45',
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
            '_route' => 'generated::bJ0AjopBXhrtAPVS',
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
            '_route' => 'generated::fMDrnUBoTF7t3AUj',
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
            '_route' => 'generated::GAJCHaGLPttchuFg',
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
            '_route' => 'generated::C8A4LL41cTzE2dtw',
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
            '_route' => 'generated::XEZKRJBeRQPcAgXz',
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
            '_route' => 'generated::fIp30pPPspqokmfw',
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
            '_route' => 'generated::KHAZpluZ4HHbTgDF',
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
            '_route' => 'generated::ir86vbfnWZXO1hZs',
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
            '_route' => 'generated::PUeHrd92hj1OKoPW',
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
            '_route' => 'generated::fSgKuQt4ktDTNNG9',
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
            '_route' => 'generated::MuonmBo9VH937yEj',
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
            '_route' => 'generated::64T0d0QghlizhlPJ',
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
            '_route' => 'generated::hZ0HZULhcD9xKRpd',
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
            '_route' => 'generated::I02QEaMkl0PwVVo9',
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
            '_route' => 'generated::B2Yoo1N3TY0fatRm',
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
            '_route' => 'generated::n1xw5GXmZN1wVTAY',
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
            '_route' => 'generated::HtjcsAIefS372ryg',
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
            '_route' => 'generated::ypLRkJe5ScvyMb7j',
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
            '_route' => 'generated::6AvkmNvelfz1i8X5',
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
            '_route' => 'generated::1PkelXUlFswCDiPK',
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
            '_route' => 'generated::7USkgkqBxCs12iTl',
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
            '_route' => 'generated::L9LRGYQhpvRsiGkd',
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
            '_route' => 'generated::H0WfwBm8vOJpqygD',
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
            '_route' => 'generated::mLTG2UxovVjgN5Rs',
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
            '_route' => 'generated::pG6hJiK0487Rnm6w',
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
            '_route' => 'generated::s8Jif9jG2pKFl0te',
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
            '_route' => 'generated::BQINSkkZpUyVlsNM',
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
            '_route' => 'generated::8YOMomN4SGzQZqce',
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
            '_route' => 'generated::HGFaa0IBimI0Rnvn',
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
            '_route' => 'generated::emIzDvL6r2DSfnhc',
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
            '_route' => 'generated::iXSgFjI5VqJTvC89',
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
            '_route' => 'generated::HyWV6PlLeVCX2m7z',
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
            '_route' => 'generated::K9T3rZnU9UamgFZz',
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
            '_route' => 'generated::N32wE21ePYBjrg6e',
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
            '_route' => 'generated::Gz8bqt5jBiJqnnGA',
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
            '_route' => 'generated::I6gC1ZNlAwvlhijo',
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
            '_route' => 'generated::kEUimlnQojo9uWMM',
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
            '_route' => 'generated::8nVMOiDf9V5hSbbJ',
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
            '_route' => 'generated::zpjvihfthd8bph7C',
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
            '_route' => 'generated::FuwaDHgNQWdt07XI',
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
            '_route' => 'generated::CzWoxmTfXgcMCe1N',
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
            '_route' => 'generated::sTCEFSJrxWqiHekB',
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
            '_route' => 'generated::dZJsRqtPPUPfy9lN',
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
            '_route' => 'generated::Rn4vIaWpesLON88L',
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
            '_route' => 'generated::VUKrQrU6lnerg27O',
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
            '_route' => 'generated::zGkfR3Jviy8lchl4',
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
            '_route' => 'generated::pCnHtO0Oi2CYVjWj',
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
            '_route' => 'generated::X10BE69lCCQitb71',
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
            '_route' => 'generated::06T9vSNWX7t7flgI',
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
            '_route' => 'generated::K2QVIAuICXK5mAjX',
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
            '_route' => 'generated::no02f4Fn14314b41',
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
            '_route' => 'generated::zGd4odCVdoJQNmvv',
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
            '_route' => 'generated::uDv3FlViHA8u4SUZ',
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
            '_route' => 'generated::WKrOmQMtjnqcblRn',
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
            '_route' => 'generated::OBLpAjI4qrfwpkGW',
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
            '_route' => 'generated::gNCL3YgN1skdokFq',
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
            '_route' => 'generated::H0b0VzOvvG5H4xwl',
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
            '_route' => 'generated::6Mjuoc5xa2HNPVOF',
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
            '_route' => 'generated::umsa1Ij4aDWicPkI',
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
            '_route' => 'generated::4A2RIHAXJA5pjieT',
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
            '_route' => 'generated::jAVb6NgEoWKXdtMJ',
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
            '_route' => 'generated::K9vLiWoJDBtMr0aS',
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
            '_route' => 'generated::8S6bFgEbZRCoQlxn',
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
            '_route' => 'generated::Vaq6HCc99i9hA4I6',
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
            '_route' => 'generated::hufKzR7zwy9KUzPW',
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
            '_route' => 'generated::9EEK5x1jeGI91TPI',
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
            '_route' => 'generated::phZv7SYDM8mp9fjk',
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
            '_route' => 'generated::FDrVimz2UzBzXmpV',
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
            '_route' => 'generated::6ZvTCxeR0uWnllqP',
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
            '_route' => 'generated::xKCMNgx6Ywr4LB6D',
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
            '_route' => 'generated::vUkfZG1Fh9zI8jIc',
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
            '_route' => 'generated::SURZEKaOOpgOjZiH',
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
            '_route' => 'generated::jj5Fc6nkditjfkc5',
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
            '_route' => 'generated::gyBoa5buOX8GLGoH',
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
            '_route' => 'generated::ATxNThVXLjQu5MzM',
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
            '_route' => 'generated::Q2Iaug7gQqJ50SX0',
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
            '_route' => 'generated::OqorhTBdhjuUyQUf',
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
            '_route' => 'generated::PR4jRwCc9ysMkJru',
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
            '_route' => 'generated::2KVp8gT0ufPvFFoU',
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
            '_route' => 'generated::9C2v0Ndp7LuSjKho',
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
            '_route' => 'generated::Bm5nAqoGUZnVIFyK',
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
            '_route' => 'generated::kjN6A9VbXhCkTamY',
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
            '_route' => 'generated::x8qA9a8u4G2XpdQx',
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
            '_route' => 'generated::sL7rRZk3xXxX1gY8',
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
            '_route' => 'generated::j9TztMuNZNqHKEwP',
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
            '_route' => 'generated::jVYu8zBfX0DrmedA',
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
    'generated::YOvXKZR0pMNfMgHj' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000003307b4300000000727a1a1b";}";s:4:"hash";s:44:"q+oqZWp4e3avfSTvgarM4s/oA1/cP1KaG+a732ybIY8=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YOvXKZR0pMNfMgHj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fjmjb2wqDxy05jS0' => 
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
        'as' => 'generated::Fjmjb2wqDxy05jS0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AquQ0jPyOklOVTRe' => 
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
        'as' => 'generated::AquQ0jPyOklOVTRe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VeS2OLBUQk6EVZEq' => 
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
        'as' => 'generated::VeS2OLBUQk6EVZEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4XjtDj6Jv560lc8v' => 
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
        'as' => 'generated::4XjtDj6Jv560lc8v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7cSgij4IQmHYtrt0' => 
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
        'as' => 'generated::7cSgij4IQmHYtrt0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7gFE7PM1Rd8irzRJ' => 
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
        'as' => 'generated::7gFE7PM1Rd8irzRJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3sltqpsGDKkRHCc4' => 
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
        'as' => 'generated::3sltqpsGDKkRHCc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CDIxn2hkddemdamV' => 
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
        'as' => 'generated::CDIxn2hkddemdamV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8S6bFgEbZRCoQlxn' => 
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
        'as' => 'generated::8S6bFgEbZRCoQlxn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mq0QiYmGjIxooSfE' => 
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
        'as' => 'generated::mq0QiYmGjIxooSfE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xkBeGwxHrdQciTYH' => 
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
        'as' => 'generated::xkBeGwxHrdQciTYH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vaq6HCc99i9hA4I6' => 
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
        'as' => 'generated::Vaq6HCc99i9hA4I6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::txznqAUhVkPTucXM' => 
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
        'as' => 'generated::txznqAUhVkPTucXM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w2upaRcorE8Xnn1m' => 
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
        'as' => 'generated::w2upaRcorE8Xnn1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gq2sp2gE6UzKvc8h' => 
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
        'as' => 'generated::gq2sp2gE6UzKvc8h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PmQeBMnRCiQ0wYZS' => 
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
        'as' => 'generated::PmQeBMnRCiQ0wYZS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sPksp6ukHPWYU2gB' => 
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
        'as' => 'generated::sPksp6ukHPWYU2gB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PcRcHbHahmMkOK5n' => 
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
        'as' => 'generated::PcRcHbHahmMkOK5n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5pApD7JDeJNQ0qNG' => 
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
        'as' => 'generated::5pApD7JDeJNQ0qNG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JJwluuTnoLVhTSce' => 
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
        'as' => 'generated::JJwluuTnoLVhTSce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cff8OzuUOdKSWULx' => 
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
        'as' => 'generated::cff8OzuUOdKSWULx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::38QVKpxftNMF8H91' => 
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
        'as' => 'generated::38QVKpxftNMF8H91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qCcxZKxmlVjoYahu' => 
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
        'as' => 'generated::qCcxZKxmlVjoYahu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JW6XPPi7iBVuejix' => 
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
        'as' => 'generated::JW6XPPi7iBVuejix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpmwCFkPFliin5Gt' => 
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
        'as' => 'generated::zpmwCFkPFliin5Gt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8FYdInOdfSr9kZzC' => 
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
        'as' => 'generated::8FYdInOdfSr9kZzC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PZJdPCL2f1Bcj3oO' => 
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
        'as' => 'generated::PZJdPCL2f1Bcj3oO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yVFy9oOqOeqK60U8' => 
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
        'as' => 'generated::yVFy9oOqOeqK60U8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z6NaWjhZs4V16hk5' => 
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
        'as' => 'generated::z6NaWjhZs4V16hk5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YzBzANcXGddXZbDc' => 
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
        'as' => 'generated::YzBzANcXGddXZbDc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IyPfj7EN8UYmN9ad' => 
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
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionSuccessFunction',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionSuccessFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IyPfj7EN8UYmN9ad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SICjz2PyG34Xgn3M' => 
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
          1 => 'userAuth',
        ),
        'uses' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionFailedFunction',
        'controller' => 'App\\Http\\Controllers\\user\\SubscriptionController@subscriptionFailedFunction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SICjz2PyG34Xgn3M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yxqmnUBALyyEILEn' => 
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
        'as' => 'generated::yxqmnUBALyyEILEn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yuN36trqD1v3psNw' => 
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
        'as' => 'generated::yuN36trqD1v3psNw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iFBvvHkOZLGLBCJJ' => 
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
        'as' => 'generated::iFBvvHkOZLGLBCJJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zf7zYwRDrtgKNpQb' => 
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
        'as' => 'generated::zf7zYwRDrtgKNpQb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fh7Joz56KyqvCK45' => 
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
        'as' => 'generated::fh7Joz56KyqvCK45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bJ0AjopBXhrtAPVS' => 
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
        'as' => 'generated::bJ0AjopBXhrtAPVS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fMDrnUBoTF7t3AUj' => 
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
        'as' => 'generated::fMDrnUBoTF7t3AUj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GAJCHaGLPttchuFg' => 
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
        'as' => 'generated::GAJCHaGLPttchuFg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C8A4LL41cTzE2dtw' => 
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
        'as' => 'generated::C8A4LL41cTzE2dtw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XEZKRJBeRQPcAgXz' => 
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
        'as' => 'generated::XEZKRJBeRQPcAgXz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fIp30pPPspqokmfw' => 
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
        'as' => 'generated::fIp30pPPspqokmfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hufKzR7zwy9KUzPW' => 
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
        'as' => 'generated::hufKzR7zwy9KUzPW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KHAZpluZ4HHbTgDF' => 
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
        'as' => 'generated::KHAZpluZ4HHbTgDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ir86vbfnWZXO1hZs' => 
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
        'as' => 'generated::ir86vbfnWZXO1hZs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9EEK5x1jeGI91TPI' => 
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
        'as' => 'generated::9EEK5x1jeGI91TPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PUeHrd92hj1OKoPW' => 
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
        'as' => 'generated::PUeHrd92hj1OKoPW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fSgKuQt4ktDTNNG9' => 
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
        'as' => 'generated::fSgKuQt4ktDTNNG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MuonmBo9VH937yEj' => 
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
        'as' => 'generated::MuonmBo9VH937yEj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64T0d0QghlizhlPJ' => 
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
        'as' => 'generated::64T0d0QghlizhlPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hZ0HZULhcD9xKRpd' => 
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
        'as' => 'generated::hZ0HZULhcD9xKRpd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I02QEaMkl0PwVVo9' => 
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
        'as' => 'generated::I02QEaMkl0PwVVo9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B2Yoo1N3TY0fatRm' => 
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
        'as' => 'generated::B2Yoo1N3TY0fatRm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n1xw5GXmZN1wVTAY' => 
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
        'as' => 'generated::n1xw5GXmZN1wVTAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtjcsAIefS372ryg' => 
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
        'as' => 'generated::HtjcsAIefS372ryg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ypLRkJe5ScvyMb7j' => 
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
        'as' => 'generated::ypLRkJe5ScvyMb7j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6AvkmNvelfz1i8X5' => 
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
        'as' => 'generated::6AvkmNvelfz1i8X5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1PkelXUlFswCDiPK' => 
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
        'as' => 'generated::1PkelXUlFswCDiPK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7USkgkqBxCs12iTl' => 
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
        'as' => 'generated::7USkgkqBxCs12iTl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L9LRGYQhpvRsiGkd' => 
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
        'as' => 'generated::L9LRGYQhpvRsiGkd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FDrVimz2UzBzXmpV' => 
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
        'as' => 'generated::FDrVimz2UzBzXmpV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0WfwBm8vOJpqygD' => 
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
        'as' => 'generated::H0WfwBm8vOJpqygD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ZvTCxeR0uWnllqP' => 
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
        'as' => 'generated::6ZvTCxeR0uWnllqP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xKCMNgx6Ywr4LB6D' => 
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
        'as' => 'generated::xKCMNgx6Ywr4LB6D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vUkfZG1Fh9zI8jIc' => 
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
        'as' => 'generated::vUkfZG1Fh9zI8jIc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SURZEKaOOpgOjZiH' => 
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
        'as' => 'generated::SURZEKaOOpgOjZiH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mLTG2UxovVjgN5Rs' => 
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
        'as' => 'generated::mLTG2UxovVjgN5Rs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jj5Fc6nkditjfkc5' => 
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
        'as' => 'generated::jj5Fc6nkditjfkc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pG6hJiK0487Rnm6w' => 
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
        'as' => 'generated::pG6hJiK0487Rnm6w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::phZv7SYDM8mp9fjk' => 
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
        'as' => 'generated::phZv7SYDM8mp9fjk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gyBoa5buOX8GLGoH' => 
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
        'as' => 'generated::gyBoa5buOX8GLGoH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s8Jif9jG2pKFl0te' => 
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
        'as' => 'generated::s8Jif9jG2pKFl0te',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BQINSkkZpUyVlsNM' => 
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
        'as' => 'generated::BQINSkkZpUyVlsNM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8YOMomN4SGzQZqce' => 
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
        'as' => 'generated::8YOMomN4SGzQZqce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HGFaa0IBimI0Rnvn' => 
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
        'as' => 'generated::HGFaa0IBimI0Rnvn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::emIzDvL6r2DSfnhc' => 
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
        'as' => 'generated::emIzDvL6r2DSfnhc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iXSgFjI5VqJTvC89' => 
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
        'as' => 'generated::iXSgFjI5VqJTvC89',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HyWV6PlLeVCX2m7z' => 
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
        'as' => 'generated::HyWV6PlLeVCX2m7z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ATxNThVXLjQu5MzM' => 
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
        'as' => 'generated::ATxNThVXLjQu5MzM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K9T3rZnU9UamgFZz' => 
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
        'as' => 'generated::K9T3rZnU9UamgFZz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::N32wE21ePYBjrg6e' => 
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
        'as' => 'generated::N32wE21ePYBjrg6e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gz8bqt5jBiJqnnGA' => 
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
        'as' => 'generated::Gz8bqt5jBiJqnnGA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::I6gC1ZNlAwvlhijo' => 
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
        'as' => 'generated::I6gC1ZNlAwvlhijo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::kEUimlnQojo9uWMM' => 
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
        'as' => 'generated::kEUimlnQojo9uWMM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::8nVMOiDf9V5hSbbJ' => 
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
        'as' => 'generated::8nVMOiDf9V5hSbbJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpjvihfthd8bph7C' => 
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
        'as' => 'generated::zpjvihfthd8bph7C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FuwaDHgNQWdt07XI' => 
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
        'as' => 'generated::FuwaDHgNQWdt07XI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q2Iaug7gQqJ50SX0' => 
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
        'as' => 'generated::Q2Iaug7gQqJ50SX0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PR4jRwCc9ysMkJru' => 
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
        'as' => 'generated::PR4jRwCc9ysMkJru',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::CzWoxmTfXgcMCe1N' => 
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
        'as' => 'generated::CzWoxmTfXgcMCe1N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::sTCEFSJrxWqiHekB' => 
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
        'as' => 'generated::sTCEFSJrxWqiHekB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::dZJsRqtPPUPfy9lN' => 
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
        'as' => 'generated::dZJsRqtPPUPfy9lN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::Rn4vIaWpesLON88L' => 
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
        'as' => 'generated::Rn4vIaWpesLON88L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::VUKrQrU6lnerg27O' => 
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
        'as' => 'generated::VUKrQrU6lnerg27O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::zGkfR3Jviy8lchl4' => 
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
        'as' => 'generated::zGkfR3Jviy8lchl4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::pCnHtO0Oi2CYVjWj' => 
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
        'as' => 'generated::pCnHtO0Oi2CYVjWj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::X10BE69lCCQitb71' => 
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
        'as' => 'generated::X10BE69lCCQitb71',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::06T9vSNWX7t7flgI' => 
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
        'as' => 'generated::06T9vSNWX7t7flgI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2KVp8gT0ufPvFFoU' => 
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
        'as' => 'generated::2KVp8gT0ufPvFFoU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K2QVIAuICXK5mAjX' => 
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
        'as' => 'generated::K2QVIAuICXK5mAjX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::sL7rRZk3xXxX1gY8' => 
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
        'as' => 'generated::sL7rRZk3xXxX1gY8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j9TztMuNZNqHKEwP' => 
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
        'as' => 'generated::j9TztMuNZNqHKEwP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::9C2v0Ndp7LuSjKho' => 
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
        'as' => 'generated::9C2v0Ndp7LuSjKho',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::no02f4Fn14314b41' => 
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
        'as' => 'generated::no02f4Fn14314b41',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::zGd4odCVdoJQNmvv' => 
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
        'as' => 'generated::zGd4odCVdoJQNmvv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::uDv3FlViHA8u4SUZ' => 
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
        'as' => 'generated::uDv3FlViHA8u4SUZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::WKrOmQMtjnqcblRn' => 
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
        'as' => 'generated::WKrOmQMtjnqcblRn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::OBLpAjI4qrfwpkGW' => 
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
        'as' => 'generated::OBLpAjI4qrfwpkGW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::gNCL3YgN1skdokFq' => 
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
        'as' => 'generated::gNCL3YgN1skdokFq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H0b0VzOvvG5H4xwl' => 
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
        'as' => 'generated::H0b0VzOvvG5H4xwl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Mjuoc5xa2HNPVOF' => 
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
        'as' => 'generated::6Mjuoc5xa2HNPVOF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bm5nAqoGUZnVIFyK' => 
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
        'as' => 'generated::Bm5nAqoGUZnVIFyK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::umsa1Ij4aDWicPkI' => 
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
        'as' => 'generated::umsa1Ij4aDWicPkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kjN6A9VbXhCkTamY' => 
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
        'as' => 'generated::kjN6A9VbXhCkTamY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4A2RIHAXJA5pjieT' => 
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
        'as' => 'generated::4A2RIHAXJA5pjieT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x8qA9a8u4G2XpdQx' => 
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
        'as' => 'generated::x8qA9a8u4G2XpdQx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jAVb6NgEoWKXdtMJ' => 
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
        'as' => 'generated::jAVb6NgEoWKXdtMJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OqorhTBdhjuUyQUf' => 
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
        'as' => 'generated::OqorhTBdhjuUyQUf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K9vLiWoJDBtMr0aS' => 
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
        'as' => 'generated::K9vLiWoJDBtMr0aS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jVYu8zBfX0DrmedA' => 
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
        'as' => 'generated::jVYu8zBfX0DrmedA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
