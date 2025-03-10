<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about-us', 'About_us::index');
$routes->get('/business-loan', 'Business_loan::index');
$routes->get('/emi-calculator', 'Emi_calculator::index');
$routes->get('/blogs', 'Blogs::index');
$routes->get('/contact-us', 'Contact_us::index');
$routes->get('/site-under-construction', 'Site_under_construction::index');
$routes->get('/privacy-policy', 'Privacy_policy::index');
$routes->get('/terms-and-conditions', 'Terms_and_conditions::index');
$routes->get('/thankyou', 'Thankyou::index');
$routes->get('/sitemap', 'Sitemap::index');


/* blogs */ 
$routes->get('/how-to-choose-the-best-loan-provider-agency-for-your-business-needs', 'How_to_choose_the_best_loan_provider_agency_for_your_business_needs::index');
$routes->get('/a-step-by-step-guide-to-applying-for-an-instant-business-loan', 'A_step_by_step_guide_to_applying_for_an_instant_business_loan::index');
$routes->get('/five-ways-your-business-loan-gives-you-tax-benefits', 'Five_ways_your_business_loan_gives_you_tax_benefits::index');
$routes->get('/is-it-safe-to-obtain-business-loans-from-loan-aggregators', 'Is_it_safe_to_obtain_business_loans_from_loan_aggregators::index');
$routes->get('/seven-crucial-factors-influencing-business-loan-interest-rates', 'Seven_crucial_factors_influencing_business_loan_interest_rates::index');
$routes->get('/how-to-enhance-your-credit-score-for-a-business-loan', 'How_to_enhance_your_credit_score_for_a_business_loan::index');

