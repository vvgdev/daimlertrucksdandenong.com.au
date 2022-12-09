<?php
    return [
        'api' => [
            'media_url' =>env('AU_API_URL'),
            'get_slider' => env('AU_API_URL') . '/api/v1/getslider/sitewise',
            'get_location' => env('AU_API_URL') . '/api/v1/getlocations/withdealershipname',
            'get_make_data' => env('AU_API_URL') . '/api/v1/getinventorymake/availability',
            'get_model_data_by_make_and_location' => env('AU_API_URL') . '/api/v1/getinventorymodel',
            'get_special_inventory' => env('AU_API_URL') . '/api/v1/getspecialinventory',
            'get_inventory' => env('AU_API_URL') . '/api/v1/getinventorydata',
            'store_service_form' => env('AU_API_URL') . '/api/v1/contactdetail/bookservice', 
            'store_finance_enquiry_form' => env('AU_API_URL') . '/api/v1/enquiry/finance', 
            'store_spare_parts_enquiry_form' => env('AU_API_URL') . '/api/v1/enquiry/spareparts', 
            'store_enquiry_form' => env('AU_API_URL') . '/api/v1/enquiryform', 
            'store_quotation_form' => env('AU_API_URL') . '/api/v1/loan/quotation',
            'store_tradein_form' => env('AU_API_URL') . '/api/v1/value/tradin',
            'store_sendtofriend_form' => env('AU_API_URL') . '/api/v1/sendto/friend',
            'store_enquiry_offer_form' => env('AU_API_URL') . '/api/v1/send/myoffer',
            'get_bodymake' => env('AU_API_URL') . '/api/v1/getbodymake',
            'get_location_details_by_slug' => env('AU_API_URL') . '/api/v1/getlocationsdetailbyslug',
            'get_news' => env('AU_API_URL') . '/api/v1/get/news/details',
            'get_flyer' => env('AU_API_URL') . '/api/v1/getflyers',
            'get_recent_deliveries' => env('AU_API_URL') . '/api/v1/getrecentdeliveriesinventory',
            'get_meet_our_team' => env('AU_API_URL') . '/api/v1/getdepartmentwiseemployees',
            'get_social_media' => env('AU_API_URL') . '/api/v1/get/location/wise/social/media/details',
            'store_book_drive' => env('AU_API_URL') . '/api/v1/book/test/drive',
            'get_engine_transmission_data' => env('AU_API_URL') . '/api/v1/getbrandwiseenginetransmission',
            'store_careers_form' => env('AU_API_URL') . '/api/v1/careers/request/form',
            'get_inventory_location' => env('AU_API_URL') . '/api/v1/getinventorylocation',
            'get_factory_offers' => env('AU_API_URL') . '/api/v1/get/offer',
            'get_au_state' => env('AU_API_URL') . '/api/v1/au/state/get',
        ]
    ];