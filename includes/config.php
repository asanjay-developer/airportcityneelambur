<?php
/**
 * Airport City Neelambur — single source of truth for all site content.
 * Everything here is taken from the original airportcityneelambur.com.
 * Edit this file to change copy, contacts, distances or images.
 */

declare(strict_types=1);

$site = [
    'name'        => 'Airport City Neelambur',
    'short'       => 'Airport City',
    'tagline'     => 'Connecting Lifestyle, Building Futures',
    'url'         => 'https://airportcityneelambur.com/',
    'title'       => 'Airport City Neelambur, Coimbatore | DTCP Approved & RERA Registered Premium Plots',
    'description' => 'Airport City is a premium residential plotted development in Neelambur, Coimbatore: approximately 6.39 acres, 110 plots, DTCP approved layout, RERA registered, close to Coimbatore International Airport and Avinashi Road.',
    'locale'      => 'en_IN',
    'address'     => ['Neelambur, Coimbatore', 'Tamil Nadu 641407'],
    'phones'      => [
        ['display' => '+91 90039 75968', 'tel' => '+919003975968'],
        ['display' => '+91 98655 36622', 'tel' => '+919865536622'],
        ['display' => '+91 93606 74063', 'tel' => '+919360674063'],
    ],
    'emails'      => ['info@airportcityneelambur.com', 'airportcityneelambur@gmail.com'],
    'form_to'     => 'info@airportcityneelambur.com',
    'maps_url'    => 'https://www.google.com/maps/search/?api=1&query=Airport+City+Neelambur+Coimbatore',
    'video_id'    => 'Eurr_fdNQzs',
    'privacy_url' => 'https://airportcityneelambur.com/privacy-policy/',
    'year'        => date('Y'),
];

/** Remote image host (original site). Drop local copies in assets/img/ with the same file name to override. */
$imageHost = 'https://airportcityneelambur.com/wp-content/uploads/';

$images = [
    'entrance' => ['file' => 'airport-city-entrance-1024x683.jpg', 'path' => '2026/10/', 'w' => 1024, 'h' => 683,  'alt' => 'The grand entrance of Airport City Neelambur'],
    'arch'     => ['file' => 'DSC04232.jpg-1-1260x680.jpg',        'path' => '2026/09/', 'w' => 1260, 'h' => 680,  'alt' => 'Entrance arch, Airport City Neelambur'],
    'g1'       => ['file' => 'IMG_0561-1000x1000.jpg',             'path' => '2026/09/', 'w' => 1000, 'h' => 1000, 'alt' => 'Airport City Neelambur — site photograph 1'],
    'g2'       => ['file' => 'IMG_0576-1000x1000.jpg',             'path' => '2026/09/', 'w' => 1000, 'h' => 1000, 'alt' => 'Airport City Neelambur — site photograph 2'],
    'g3'       => ['file' => 'IMG_0577-1000x1000.jpg',             'path' => '2026/09/', 'w' => 1000, 'h' => 1000, 'alt' => 'Airport City Neelambur — site photograph 3'],
    'g4'       => ['file' => 'IMG_0578-1260x680.jpg',              'path' => '2026/09/', 'w' => 1260, 'h' => 680,  'alt' => 'Airport City Neelambur — site photograph 4'],
    'g5'       => ['file' => 'IMG_0580-1260x680.jpg',              'path' => '2026/09/', 'w' => 1260, 'h' => 680,  'alt' => 'Airport City Neelambur — site photograph 5'],
    'g6'       => ['file' => 'IMG_0504.JPG-1000x1000.jpg',         'path' => '2026/09/', 'w' => 1000, 'h' => 1000, 'alt' => 'Airport City Neelambur — site photograph 6'],
    'layout'   => ['file' => 'airportcityneelambur-laoutoptions.jpg', 'path' => '2026/08/', 'w' => 1200, 'h' => 800, 'alt' => 'Plots and layout options at Airport City Neelambur'],
    'logo'     => ['file' => 'cropped-cropped-Airportcity-scaled-1-270x270.png', 'path' => '2026/08/', 'w' => 270, 'h' => 270, 'alt' => 'Airport City Neelambur'],
];

$nav = [
    ['id' => 'about',     'num' => '01', 'label' => 'About'],
    ['id' => 'project',   'num' => '02', 'label' => 'Project & Amenities'],
    ['id' => 'location',  'num' => '03', 'label' => 'Location'],
    ['id' => 'plots',     'num' => '04', 'label' => 'Plots & Layout'],
    ['id' => 'gallery',   'num' => '05', 'label' => 'Gallery'],
    ['id' => 'contact',   'num' => '06', 'label' => 'Contact'],
];

$facts = [
    ['value' => '6.39',  'unit' => 'acres',   'label' => 'Approximate extent'],
    ['value' => '110',   'unit' => 'plots',   'label' => 'Premium residential plots'],
    ['value' => 'DTCP',  'unit' => '',        'label' => 'Approved layout'],
    ['value' => 'RERA',  'unit' => '',        'label' => 'Registered project'],
];

$credentials = [
    ['DTCP Approved Layout',        'An approved layout, planned within the regulatory framework.'],
    ['RERA Registered Project',     'Registered under RERA for buyer confidence.'],
    ['Grand Entrance Arch',         'A signature arrival to the community.'],
    ['Athikadavu Water Connection', 'Water supply connection for the layout.'],
    ['3-Phase EB Connection',       'Three-phase electricity connection in place.'],
    ['10-Foot Compound Wall',       'A secure, gated boundary around the development.'],
];

$amenities = [
    'Grand Entrance',
    '60,000-Litre Overhead Water Tank',
    'Grand Green Park',
    'Badminton & Basketball Courts',
    "Children's Play Area",
    '10-Foot Compound Wall',
    'Open-Air Amphitheatre',
    'Senior Citizen Walking Area',
    'Cricket Practice Area',
    'Athikadavu Water Connection',
    '3-Phase EB Connection',
];

$planning = [
    'Wide internal roads',
    'Avenue plantation',
    'Drainage infrastructure',
    'Street lighting',
    'Landscaped green spaces',
    'Secure gated development',
];

/** Distances in km, exactly as published on the original site. */
$distances = [
    ['Yello Train School',                  0.5],
    ['Neelambur – Avinashi Road',           1.5],
    ['PSG Institute of Technology',         4],
    ['Royal Care Hospital',                 5],
    ['New Coimbatore International Airport', 6],
    ['Le Méridien Hotel',                   6],
    ['KPR Tech Park',                       6],
    ['KGM Hospital',                        7],
    ['KMCH Hospital',                       7],
];

$steps = [
    ['Explore your plot options',  'Start with the available residential plots. Choose one that suits your home plans, preferred position within the layout and investment requirements.'],
    ['Understand the layout',      'Review the overall layout, plot positioning and road access, and compare options against your requirements with our team.'],
    ['Visit the project site',     'Experience the location, the surrounding development and the residential environment in person before you decide.'],
    ['Secure your plot',           'Select your preferred plot and move through the booking and purchase process with guided assistance.'],
];

$faqs = [
    ['Why is Neelambur a good location to buy a plot in Coimbatore?', 'Neelambur is a strategically positioned area of Coimbatore with convenient access to the airport, Avinashi Road and important parts of the city. Its growing residential and commercial development makes it an attractive location for both homebuyers and property investors.'],
    ['How is Airport City Neelambur connected to Coimbatore Airport?', 'Airport City Neelambur is strategically located near Coimbatore International Airport, offering convenient access for residents, business travellers and frequent flyers.'],
    ['Is Neelambur a good location for property investment?', "Neelambur's connectivity, proximity to the airport and ongoing development make it a promising location to consider for residential property investment. Buyers should evaluate the specific project, approvals, pricing and future requirements before investing."],
    ['Why choose Airport City Neelambur over other plots in Coimbatore?', 'Airport City combines a strategic Neelambur location, convenient airport and road connectivity, premium residential plots and a community-focused approach, making it an option worth exploring for both homebuyers and investors.'],
];

$interests = ['Dream Home', 'Investment Property', 'Premium Villa Plot', 'Future Family Home', 'Long-Term Investment', 'Near Airport Location', 'Gated Community Living', 'Residential Plot'];
