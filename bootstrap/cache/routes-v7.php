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
            '_route' => 'generated::3tTWXUBe0NGRA6AW',
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
            '_route' => 'generated::yCoCDSv8fpeKmLh7',
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
            '_route' => 'generated::OLilrSSq1dHH92Y1',
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
            '_route' => 'generated::nO9xcyaC0Vo7uvCE',
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
            '_route' => 'generated::tICVdFMhAfvLtyIP',
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
            '_route' => 'generated::DbaWjand1pQELgrC',
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
            '_route' => 'generated::wqLbcZ7PuztwsXeW',
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
            '_route' => 'generated::OjLa6DSbD9aHPCdz',
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
            '_route' => 'generated::XQN63TRDVoS83pLw',
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
            '_route' => 'generated::At4o5FMkZqzgvsAa',
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
            '_route' => 'generated::hVoqreFRSWTPD0rl',
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
            '_route' => 'generated::Ln99zvKSTx699pnq',
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
            '_route' => 'generated::CaHtNce9c4ivLS3U',
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
            '_route' => 'generated::F6nbPwJwFsI7itpR',
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
            '_route' => 'generated::f9UYPhyBLMlRmW7t',
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
            '_route' => 'generated::QwUM5L71kUZpsFEq',
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
            '_route' => 'generated::ZNmEAQNPKO1gwzL8',
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
            '_route' => 'generated::bPsROJYOoACpvAB8',
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
            '_route' => 'generated::uglr3YQ9USmiKGeC',
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
            '_route' => 'generated::5Sa3uHLLZxEAsS8g',
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
            '_route' => 'generated::HP6vpoLyPf2IX9rU',
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
            '_route' => 'generated::4HKJ9qvWt2iK0xY9',
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
            '_route' => 'generated::hIbM9MRcXXujjTXz',
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
            '_route' => 'generated::FDX6YeLxBYHupwSb',
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
            '_route' => 'generated::HO8aQF5JdNFfo6GR',
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
            '_route' => 'generated::cm2oWQGB5z459DGX',
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
            '_route' => 'generated::n4kbtuHdnb5l1wGI',
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
            '_route' => 'generated::2gkZaBuZGVUSdCau',
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
            '_route' => 'generated::ckUhkyyWMbtElOfR',
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
            '_route' => 'generated::p8xnF53bVZVNEydM',
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
            '_route' => 'generated::yyWm8NlMYZdrUd9p',
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
            '_route' => 'generated::1prOTI0lfJs4F1Ol',
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
            '_route' => 'generated::dixlLRi5IpaX3MLz',
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
            '_route' => 'generated::znLk1n8pjZCi7T4f',
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
            '_route' => 'generated::xoZjEpJkiPdrB0G4',
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
            '_route' => 'generated::5DyE7vrWzzRds02d',
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
            '_route' => 'generated::mGxITRwS2UXVj7lu',
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
            '_route' => 'generated::L3dT50p4Hv7QQP6C',
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
            '_route' => 'generated::MA5731Gt72jEfFCy',
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
            '_route' => 'generated::0MVhbFubuHBasqc4',
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
            '_route' => 'generated::fxlQgCnwbBjfReZw',
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
            '_route' => 'generated::07yPcKjQnRqePTuI',
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
            '_route' => 'generated::GWTQeoqRnaE0WmZj',
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
            '_route' => 'generated::PwvHF4ieivbljCNn',
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
            '_route' => 'generated::WDAbqKeWrMNHmVqA',
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
            '_route' => 'generated::51QU8nTbQ9NEfee4',
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
            '_route' => 'generated::QtBpHcGxjQzLpray',
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
            '_route' => 'generated::r3sPWkh4yUDVQdhG',
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
            '_route' => 'generated::k5Q0okBAvIVhB65i',
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
            '_route' => 'generated::4SaPiGFlWNDa9grY',
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
            '_route' => 'generated::dhyXNNVmBUJZJLPj',
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
            '_route' => 'generated::boY53iaK7qAwnWe0',
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
            '_route' => 'generated::gyEttjiOLPVI2AjK',
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
            '_route' => 'generated::Zf2wKds7nHFh4OMS',
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
            '_route' => 'generated::TMHN9I8XRL5z4mXq',
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
            '_route' => 'generated::1T1uhTDYmz7fm0fg',
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
            '_route' => 'generated::PLK7ijuKzW1EvV5q',
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
            '_route' => 'generated::6aoONT0ZZtDhdXsu',
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
            '_route' => 'generated::MxlN1QDnchSU1IYA',
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
            '_route' => 'generated::yjF1lLRqlvGpN2dc',
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
            '_route' => 'generated::Hn4Rc2GrURFUkA3P',
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
            '_route' => 'generated::FNYefHB27YIADok0',
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
            '_route' => 'generated::ZOmeqQGX3n5qEKES',
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
            '_route' => 'generated::QNnSziJIOirV0FCW',
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
            '_route' => 'generated::Aot4FeGLvdU0LRBs',
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
            '_route' => 'generated::k8EjOwugbas2Sagq',
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
            '_route' => 'generated::cCE5HXepga3z3sXt',
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
            '_route' => 'generated::vZ6bovU4TJboKwyh',
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
            '_route' => 'generated::fd3WIsSTw2PHXXTC',
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
            '_route' => 'generated::vwYHJtNwu9EG5wBN',
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
            '_route' => 'generated::VfToW4O7fUOR5lxu',
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
            '_route' => 'generated::EdWVJHUw1SRdxBPf',
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
            '_route' => 'generated::QO0OmVBAsz80mshD',
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
            '_route' => 'generated::IH8an5Tig4cBkVhi',
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
            '_route' => 'generated::43QmWXjgr8XZsGDS',
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
            '_route' => 'generated::7WJkT3W8VgO8kH8g',
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
            '_route' => 'generated::EqkA7hleuHovpnAj',
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
            '_route' => 'generated::cRUDPPmsFprERb43',
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
            '_route' => 'generated::QGN73O5MwW1BSiOG',
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
            '_route' => 'generated::CNXTYijbL7Fueo64',
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
            '_route' => 'generated::FkGBQKhuoQ1eV5sR',
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
            '_route' => 'generated::Ey1j01iHYmFCb9cC',
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
            '_route' => 'generated::4x0dChTkelwbbFv8',
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
            '_route' => 'generated::2udPKWXZ4ycPO4GD',
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
            '_route' => 'generated::zv07rwSjZT3KyES9',
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
            '_route' => 'generated::wFBIC4miBhf6SCP5',
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
            '_route' => 'generated::A5XL02ehTZwWL0IL',
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
            '_route' => 'generated::ioIo1ijCUbCmzVtg',
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
            '_route' => 'generated::nP3V2xOOFI1OroHd',
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
            '_route' => 'generated::x4fPScV9XCukfopH',
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
            '_route' => 'generated::fobfzaH0aNXxpWEm',
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
            '_route' => 'generated::xgvBWvsExWoJc9wu',
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
            '_route' => 'generated::fgmOnDonmbtBvrSi',
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
            '_route' => 'generated::rZIfrsgxIt81H1dO',
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
            '_route' => 'generated::D5d6YuUhCPfRkU9R',
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
            '_route' => 'generated::UldGlm7y7tgdZIqu',
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
            '_route' => 'generated::gxuoDu0wiuiH7cWB',
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
            '_route' => 'generated::OwY3jQWwhExwR2Xa',
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
            '_route' => 'generated::56PIkE0Fq5dkOYzZ',
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
            '_route' => 'generated::DMTsRSK3U5Bvg4b7',
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
            '_route' => 'generated::RiJKCLMNxth5xtzn',
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
            '_route' => 'generated::ksVKifhbpJEPj9Wo',
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
            '_route' => 'generated::x1WXCgDfc2bDyaNe',
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
            '_route' => 'generated::7sHc1C4eW8e9eOlD',
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
            '_route' => 'generated::Qt0M04P2TFDakvul',
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
            '_route' => 'generated::0cZVvLZLrwlrRZsy',
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
            '_route' => 'generated::KA2x1SJFjhEeoXlZ',
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
            '_route' => 'generated::Q9TyUrWXItsUMDoF',
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
            '_route' => 'generated::0uPNefCfNVx1RNbC',
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
            '_route' => 'generated::D9NzHWvMGAxvPCBK',
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
            '_route' => 'generated::Bv71nIm6QfxDQRH2',
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
            '_route' => 'generated::UisTmVGD2ODsrehq',
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
            '_route' => 'generated::FyqUFu28eHYDO1Sb',
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
            '_route' => 'generated::djKCMRADYfjdXznV',
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
            '_route' => 'generated::poWaMS1qeCnu0m3w',
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
            '_route' => 'generated::RrGegIyYqlkERIfW',
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
            '_route' => 'generated::eNXpSGf9G1TYBeUa',
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
            '_route' => 'generated::qe2SyO41LhuUPbls',
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
            '_route' => 'generated::hh0nWti2okRMyPer',
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
            '_route' => 'generated::kElJAKp02zTvmnLi',
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
            '_route' => 'generated::JGGcP0r4CmNA8E8K',
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
            '_route' => 'generated::b8eImg7okdlFeW7k',
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
    'generated::3tTWXUBe0NGRA6AW' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000501fd1cc0000000035202c4d";}";s:4:"hash";s:44:"3ZbBqmmX8pL+zSnhw9+gzL3wmVtrL7qXRUYB7xn++9w=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3tTWXUBe0NGRA6AW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yCoCDSv8fpeKmLh7' => 
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
        'as' => 'generated::yCoCDSv8fpeKmLh7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OLilrSSq1dHH92Y1' => 
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
        'as' => 'generated::OLilrSSq1dHH92Y1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nO9xcyaC0Vo7uvCE' => 
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
        'as' => 'generated::nO9xcyaC0Vo7uvCE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tICVdFMhAfvLtyIP' => 
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
        'as' => 'generated::tICVdFMhAfvLtyIP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DbaWjand1pQELgrC' => 
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
        'as' => 'generated::DbaWjand1pQELgrC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wqLbcZ7PuztwsXeW' => 
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
        'as' => 'generated::wqLbcZ7PuztwsXeW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OjLa6DSbD9aHPCdz' => 
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
        'as' => 'generated::OjLa6DSbD9aHPCdz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XQN63TRDVoS83pLw' => 
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
        'as' => 'generated::XQN63TRDVoS83pLw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::56PIkE0Fq5dkOYzZ' => 
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
        'as' => 'generated::56PIkE0Fq5dkOYzZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::At4o5FMkZqzgvsAa' => 
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
        'as' => 'generated::At4o5FMkZqzgvsAa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hVoqreFRSWTPD0rl' => 
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
        'as' => 'generated::hVoqreFRSWTPD0rl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DMTsRSK3U5Bvg4b7' => 
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
        'as' => 'generated::DMTsRSK3U5Bvg4b7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ln99zvKSTx699pnq' => 
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
        'as' => 'generated::Ln99zvKSTx699pnq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaHtNce9c4ivLS3U' => 
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
        'as' => 'generated::CaHtNce9c4ivLS3U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F6nbPwJwFsI7itpR' => 
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
        'as' => 'generated::F6nbPwJwFsI7itpR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f9UYPhyBLMlRmW7t' => 
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
        'as' => 'generated::f9UYPhyBLMlRmW7t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QwUM5L71kUZpsFEq' => 
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
        'as' => 'generated::QwUM5L71kUZpsFEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZNmEAQNPKO1gwzL8' => 
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
        'as' => 'generated::ZNmEAQNPKO1gwzL8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bPsROJYOoACpvAB8' => 
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
        'as' => 'generated::bPsROJYOoACpvAB8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uglr3YQ9USmiKGeC' => 
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
        'as' => 'generated::uglr3YQ9USmiKGeC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Sa3uHLLZxEAsS8g' => 
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
        'as' => 'generated::5Sa3uHLLZxEAsS8g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HP6vpoLyPf2IX9rU' => 
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
        'as' => 'generated::HP6vpoLyPf2IX9rU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4HKJ9qvWt2iK0xY9' => 
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
        'as' => 'generated::4HKJ9qvWt2iK0xY9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hIbM9MRcXXujjTXz' => 
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
        'as' => 'generated::hIbM9MRcXXujjTXz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FDX6YeLxBYHupwSb' => 
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
        'as' => 'generated::FDX6YeLxBYHupwSb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HO8aQF5JdNFfo6GR' => 
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
        'as' => 'generated::HO8aQF5JdNFfo6GR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cm2oWQGB5z459DGX' => 
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
        'as' => 'generated::cm2oWQGB5z459DGX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n4kbtuHdnb5l1wGI' => 
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
        'as' => 'generated::n4kbtuHdnb5l1wGI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2gkZaBuZGVUSdCau' => 
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
        'as' => 'generated::2gkZaBuZGVUSdCau',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ckUhkyyWMbtElOfR' => 
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
        'as' => 'generated::ckUhkyyWMbtElOfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8xnF53bVZVNEydM' => 
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
        'as' => 'generated::p8xnF53bVZVNEydM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yyWm8NlMYZdrUd9p' => 
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
        'as' => 'generated::yyWm8NlMYZdrUd9p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1prOTI0lfJs4F1Ol' => 
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
        'as' => 'generated::1prOTI0lfJs4F1Ol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dixlLRi5IpaX3MLz' => 
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
        'as' => 'generated::dixlLRi5IpaX3MLz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::znLk1n8pjZCi7T4f' => 
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
        'as' => 'generated::znLk1n8pjZCi7T4f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xoZjEpJkiPdrB0G4' => 
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
        'as' => 'generated::xoZjEpJkiPdrB0G4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5DyE7vrWzzRds02d' => 
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
        'as' => 'generated::5DyE7vrWzzRds02d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mGxITRwS2UXVj7lu' => 
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
        'as' => 'generated::mGxITRwS2UXVj7lu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L3dT50p4Hv7QQP6C' => 
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
        'as' => 'generated::L3dT50p4Hv7QQP6C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MA5731Gt72jEfFCy' => 
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
        'as' => 'generated::MA5731Gt72jEfFCy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0MVhbFubuHBasqc4' => 
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
        'as' => 'generated::0MVhbFubuHBasqc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fxlQgCnwbBjfReZw' => 
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
        'as' => 'generated::fxlQgCnwbBjfReZw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::07yPcKjQnRqePTuI' => 
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
        'as' => 'generated::07yPcKjQnRqePTuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RiJKCLMNxth5xtzn' => 
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
        'as' => 'generated::RiJKCLMNxth5xtzn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GWTQeoqRnaE0WmZj' => 
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
        'as' => 'generated::GWTQeoqRnaE0WmZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PwvHF4ieivbljCNn' => 
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
        'as' => 'generated::PwvHF4ieivbljCNn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ksVKifhbpJEPj9Wo' => 
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
        'as' => 'generated::ksVKifhbpJEPj9Wo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WDAbqKeWrMNHmVqA' => 
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
        'as' => 'generated::WDAbqKeWrMNHmVqA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::51QU8nTbQ9NEfee4' => 
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
        'as' => 'generated::51QU8nTbQ9NEfee4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QtBpHcGxjQzLpray' => 
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
        'as' => 'generated::QtBpHcGxjQzLpray',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r3sPWkh4yUDVQdhG' => 
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
        'as' => 'generated::r3sPWkh4yUDVQdhG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k5Q0okBAvIVhB65i' => 
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
        'as' => 'generated::k5Q0okBAvIVhB65i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4SaPiGFlWNDa9grY' => 
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
        'as' => 'generated::4SaPiGFlWNDa9grY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dhyXNNVmBUJZJLPj' => 
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
        'as' => 'generated::dhyXNNVmBUJZJLPj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::boY53iaK7qAwnWe0' => 
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
        'as' => 'generated::boY53iaK7qAwnWe0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gyEttjiOLPVI2AjK' => 
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
        'as' => 'generated::gyEttjiOLPVI2AjK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zf2wKds7nHFh4OMS' => 
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
        'as' => 'generated::Zf2wKds7nHFh4OMS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TMHN9I8XRL5z4mXq' => 
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
        'as' => 'generated::TMHN9I8XRL5z4mXq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1T1uhTDYmz7fm0fg' => 
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
        'as' => 'generated::1T1uhTDYmz7fm0fg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PLK7ijuKzW1EvV5q' => 
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
        'as' => 'generated::PLK7ijuKzW1EvV5q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6aoONT0ZZtDhdXsu' => 
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
        'as' => 'generated::6aoONT0ZZtDhdXsu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7sHc1C4eW8e9eOlD' => 
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
        'as' => 'generated::7sHc1C4eW8e9eOlD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MxlN1QDnchSU1IYA' => 
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
        'as' => 'generated::MxlN1QDnchSU1IYA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qt0M04P2TFDakvul' => 
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
        'as' => 'generated::Qt0M04P2TFDakvul',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0cZVvLZLrwlrRZsy' => 
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
        'as' => 'generated::0cZVvLZLrwlrRZsy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KA2x1SJFjhEeoXlZ' => 
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
        'as' => 'generated::KA2x1SJFjhEeoXlZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q9TyUrWXItsUMDoF' => 
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
        'as' => 'generated::Q9TyUrWXItsUMDoF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yjF1lLRqlvGpN2dc' => 
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
        'as' => 'generated::yjF1lLRqlvGpN2dc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0uPNefCfNVx1RNbC' => 
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
        'as' => 'generated::0uPNefCfNVx1RNbC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hn4Rc2GrURFUkA3P' => 
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
        'as' => 'generated::Hn4Rc2GrURFUkA3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x1WXCgDfc2bDyaNe' => 
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
        'as' => 'generated::x1WXCgDfc2bDyaNe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D9NzHWvMGAxvPCBK' => 
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
        'as' => 'generated::D9NzHWvMGAxvPCBK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FNYefHB27YIADok0' => 
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
        'as' => 'generated::FNYefHB27YIADok0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZOmeqQGX3n5qEKES' => 
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
        'as' => 'generated::ZOmeqQGX3n5qEKES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QNnSziJIOirV0FCW' => 
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
        'as' => 'generated::QNnSziJIOirV0FCW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Aot4FeGLvdU0LRBs' => 
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
        'as' => 'generated::Aot4FeGLvdU0LRBs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k8EjOwugbas2Sagq' => 
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
        'as' => 'generated::k8EjOwugbas2Sagq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cCE5HXepga3z3sXt' => 
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
        'as' => 'generated::cCE5HXepga3z3sXt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vZ6bovU4TJboKwyh' => 
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
        'as' => 'generated::vZ6bovU4TJboKwyh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bv71nIm6QfxDQRH2' => 
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
        'as' => 'generated::Bv71nIm6QfxDQRH2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fd3WIsSTw2PHXXTC' => 
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
        'as' => 'generated::fd3WIsSTw2PHXXTC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::vwYHJtNwu9EG5wBN' => 
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
        'as' => 'generated::vwYHJtNwu9EG5wBN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VfToW4O7fUOR5lxu' => 
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
        'as' => 'generated::VfToW4O7fUOR5lxu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::EdWVJHUw1SRdxBPf' => 
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
        'as' => 'generated::EdWVJHUw1SRdxBPf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::QO0OmVBAsz80mshD' => 
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
        'as' => 'generated::QO0OmVBAsz80mshD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::IH8an5Tig4cBkVhi' => 
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
        'as' => 'generated::IH8an5Tig4cBkVhi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::43QmWXjgr8XZsGDS' => 
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
        'as' => 'generated::43QmWXjgr8XZsGDS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7WJkT3W8VgO8kH8g' => 
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
        'as' => 'generated::7WJkT3W8VgO8kH8g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UisTmVGD2ODsrehq' => 
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
        'as' => 'generated::UisTmVGD2ODsrehq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::djKCMRADYfjdXznV' => 
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
        'as' => 'generated::djKCMRADYfjdXznV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::EqkA7hleuHovpnAj' => 
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
        'as' => 'generated::EqkA7hleuHovpnAj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::cRUDPPmsFprERb43' => 
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
        'as' => 'generated::cRUDPPmsFprERb43',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::QGN73O5MwW1BSiOG' => 
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
        'as' => 'generated::QGN73O5MwW1BSiOG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::CNXTYijbL7Fueo64' => 
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
        'as' => 'generated::CNXTYijbL7Fueo64',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::FkGBQKhuoQ1eV5sR' => 
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
        'as' => 'generated::FkGBQKhuoQ1eV5sR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::Ey1j01iHYmFCb9cC' => 
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
        'as' => 'generated::Ey1j01iHYmFCb9cC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::4x0dChTkelwbbFv8' => 
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
        'as' => 'generated::4x0dChTkelwbbFv8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::2udPKWXZ4ycPO4GD' => 
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
        'as' => 'generated::2udPKWXZ4ycPO4GD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::zv07rwSjZT3KyES9' => 
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
        'as' => 'generated::zv07rwSjZT3KyES9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::poWaMS1qeCnu0m3w' => 
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
        'as' => 'generated::poWaMS1qeCnu0m3w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wFBIC4miBhf6SCP5' => 
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
        'as' => 'generated::wFBIC4miBhf6SCP5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::kElJAKp02zTvmnLi' => 
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
        'as' => 'generated::kElJAKp02zTvmnLi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JGGcP0r4CmNA8E8K' => 
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
        'as' => 'generated::JGGcP0r4CmNA8E8K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::RrGegIyYqlkERIfW' => 
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
        'as' => 'generated::RrGegIyYqlkERIfW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::A5XL02ehTZwWL0IL' => 
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
        'as' => 'generated::A5XL02ehTZwWL0IL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::ioIo1ijCUbCmzVtg' => 
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
        'as' => 'generated::ioIo1ijCUbCmzVtg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::nP3V2xOOFI1OroHd' => 
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
        'as' => 'generated::nP3V2xOOFI1OroHd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::x4fPScV9XCukfopH' => 
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
        'as' => 'generated::x4fPScV9XCukfopH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::fobfzaH0aNXxpWEm' => 
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
        'as' => 'generated::fobfzaH0aNXxpWEm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::xgvBWvsExWoJc9wu' => 
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
        'as' => 'generated::xgvBWvsExWoJc9wu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fgmOnDonmbtBvrSi' => 
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
        'as' => 'generated::fgmOnDonmbtBvrSi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rZIfrsgxIt81H1dO' => 
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
        'as' => 'generated::rZIfrsgxIt81H1dO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eNXpSGf9G1TYBeUa' => 
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
        'as' => 'generated::eNXpSGf9G1TYBeUa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D5d6YuUhCPfRkU9R' => 
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
        'as' => 'generated::D5d6YuUhCPfRkU9R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qe2SyO41LhuUPbls' => 
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
        'as' => 'generated::qe2SyO41LhuUPbls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UldGlm7y7tgdZIqu' => 
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
        'as' => 'generated::UldGlm7y7tgdZIqu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hh0nWti2okRMyPer' => 
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
        'as' => 'generated::hh0nWti2okRMyPer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gxuoDu0wiuiH7cWB' => 
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
        'as' => 'generated::gxuoDu0wiuiH7cWB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FyqUFu28eHYDO1Sb' => 
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
        'as' => 'generated::FyqUFu28eHYDO1Sb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OwY3jQWwhExwR2Xa' => 
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
        'as' => 'generated::OwY3jQWwhExwR2Xa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b8eImg7okdlFeW7k' => 
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
        'as' => 'generated::b8eImg7okdlFeW7k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
