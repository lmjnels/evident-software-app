<?php

namespace App\Models\Web;

use App\Adapter\Model;

final class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Ssid_common');
    }


    public $userdata = [
        "token_auth" =>"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL1NpbXBseVNJRF9wcm9kdWN0aW9uXC8iLCJzdWIiOiIzIiwiaWF0IjoxNTE2MTg4OTQ3LCJleHAiOjE1MTYyMTc3NDcsIm5iZiI6MTUxNjE4ODk0NywiZGF0YSI6eyJ1c2VyIjp7InVzZXJuYW1lIjoiamFrZWhvbGRvbSIsImlkIjoiMyIsImZpcnN0X25hbWUiOiJKYWtlIiwibGFzdF9uYW1lIjoiSG9sZG9tIiwiZW1haWwiOiJqYWtlaG9sZG9tQGhvdG1haWwuY29tIiwiYWN0aXZlIjoiMSIsImxhc3RfbG9naW4iOiIxNTE2MTg4NTI0IiwiYWNjb3VudF9pZCI6IjMiLCJ1c2VyX3R5cGVfaWQiOiIxIiwiaXNfYWNjb3VudF9ob2xkZXIiOiIxIiwiaXNfYWRtaW4iOnRydWUsInBlcm1pdHRlZF9tb2R1bGVzIjpudWxsfX19.cn4S1UnndRuEpXylbhKeW8eGvvVUHwnqmRUTm1UcyqtrhSojorcRhxe1_-ZVexKzIogAtQnK4HnJZ1b0EQVLJg",
        "username" 			=> "jakeholdom",
        "account_id" 		=> 2,
        "permitted_modules" => [
            "0" => [
                "user_id" 			=> 3,
                "module_id" 		=> 1,
                "module_name" 		=> "User Admin",
                "module_ranking" 	=> 3,
                "category_id" 		=> 2,
                "category_name" 	=> "Eleplanit",
                "module_icon"		=> "fa-users",
                "module_url_link"	=> "/user/index"

            ],
            "1" => [
                "user_id" 			=> 3,
                "module_id" 		=> 2,
                "module_name" 		=> "Eleplanit",
                "module_ranking" 	=> 2,
                "category_id" 		=> 1,
                "category_name" 	=> "User Management",
                "module_icon"		=> "fa-sun-o",
                "module_url_link"	=> "/absence/index"
            ],
            "2" => [
                "user_id" 			=> 3,
                "module_id" 		=> 3,
                "module_name" 		=> "Customer",
                "module_ranking" 	=> 1,
                "category_id" 		=> 3,
                "category_name" 	=> "Customer Services",
                "module_icon"		=> "fa-user-circle-o",
                "module_url_link"	=> "/customer/index",
            ],
            "3" => [
                "user_id" 			=> 3,
                "module_id" 		=> 4,
                "module_name" 		=> "Jobs",
                "module_ranking" 	=> 4,
                "category_id" 		=> 3,
                "category_name" 	=> "Customer Services",
                "module_icon"		=> "fa-truck",
                "module_url_link"	=> "/job/index"
            ],
            "4" => [
                "user_id" 			=> 3,
                "module_id" 		=> 5,
                "module_name" 		=> "Quotes",
                "module_ranking" 	=> 5,
                "category_id" 		=> 3,
                "category_name" 	=> "Customer Services",
                "module_icon"		=> "fa-money",
                "module_url_link"	=> "/quote/index"
            ],
        ]
    ];

    public $jobs_response = [
        "auth_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL1NpbXBseVNJRF9wcm9kdWN0aW9uXC8iLCJzdWIiOiIzIiwiaWF0IjoxNTE2MTg0MDk0LCJleHAiOjE1MTYyMTI4OTQsIm5iZiI6MTUxNjE4NDA5NCwiZGF0YSI6eyJ1c2VyIjp7InVzZXJuYW1lIjoiamFrZWhvbGRvbSIsImlkIjoiMyIsImZpcnN0X25hbWUiOiJKYWtlIiwibGFzdF9uYW1lIjoiSG9sZG9tIiwiZW1haWwiOiJqYWtlaG9sZG9tQGhvdG1haWwuY29tIiwiYWN0aXZlIjoiMSIsImxhc3RfbG9naW4iOiIxNTE2MTc4NjkzIiwiYWNjb3VudF9pZCI6IjMiLCJ1c2VyX3R5cGVfaWQiOiIxIiwiaXNfYWNjb3VudF9ob2xkZXIiOiIxIiwiaXNfYWRtaW4iOnRydWUsInBlcm1pdHRlZF9tb2R1bGVzIjpudWxsfX19.rXu7sRWM7eGn6LzFnsuHTmqPqD0blvx8QUEUhHS-o2MS6PbDDsIwa77KzBsjq7wYmjpZkN72ffcrkUHsuMwt-Q",
        "status"=> true,
        "message"=> "Job records found",
        "job"=> [
            [
                "job_id"=> "3",
                "customer_id"=> "2",
                "account_id"=> "3",
                "job_address_id"=> "1776",
                "job_type"=> "Installation",
                "job_date"=> "2018-01-10",
                "job_status"=> "Un-assigned",
                "job_duration"=> "1.0",
                "job_notes"=> "",
                "assigned_to"=> null,
                "works_required"=> "",
                "access_requirements"=> "",
                "permission_requirements"=> "",
                "parking_requirements"=> "",
                "special_instructions"=> "",
                "linked_quote_id"=> null,
                "start_time"=> null,
                "finish_time"=> null,
                "created_on"=> "2018-01-10 09:39:56",
                "created_by"=> "2",
                "last_modified"=> "2018-01-16 16:32:27",
                "last_modified_by"=> null,
                "main_address_id"=> "1776",
                "address_line_1"=> "30A The Green",
                "address_line_2"=> "Twickenham",
                "address_line_3"=> "TW2 5AB",
                "address_city"=> "Twickenham",
                "address_county"=> "Greater London",
                "address_postcode"=> "TW2 5AB",
                "customer_name"=> "Joe Coleman",
                "linked_client"=> "PC Painters",
                "address_summaryline"=> "30A The Green, Twickenham, Greater London, TW2 5AB",
                "address_business_name"=> ""
            ],
            [
                "job_id"=> "5",
                "customer_id"=> "2",
                "account_id"=> "3",
                "job_address_id"=> "1781",
                "job_type"=> "Installation",
                "job_date"=> "2018-01-08",
                "job_status"=> "Un-assigned",
                "job_duration"=> "1.0",
                "job_notes"=> "",
                "assigned_to"=> null,
                "works_required"=> "",
                "access_requirements"=> "",
                "permission_requirements"=> "",
                "parking_requirements"=> "",
                "special_instructions"=> "",
                "linked_quote_id"=> null,
                "start_time"=> null,
                "finish_time"=> null,
                "created_on"=> "2018-01-10 16:01:55",
                "created_by"=> "2",
                "last_modified"=> "2018-01-16 16:32:27",
                "last_modified_by"=> null,
                "main_address_id"=> "1781",
                "address_line_1"=> "Flat 2",
                "address_line_2"=> "34 The Green",
                "address_line_3"=> "Twickenham, TW2 5AB",
                "address_city"=> "Twickenham",
                "address_county"=> "Greater London",
                "address_postcode"=> "TW2 5AB",
                "customer_name"=> "Brad Josh",
                "linked_client"=> "Computer Solution",
                "address_summaryline"=> "Flat 2, 34 The Green, Twickenham, Greater London, TW2 5AB",
                "address_business_name"=> ""
            ],
            [
                "job_id"=> "6",
                "customer_id"=> "2",
                "account_id"=> "3",
                "job_address_id"=> "1011",
                "job_type"=> "Installation",
                "job_date"=> "2018-01-07",
                "job_status"=> "Un-assigned",
                "job_duration"=> "1.0",
                "job_notes"=> "",
                "assigned_to"=> null,
                "works_required"=> "",
                "access_requirements"=> "",
                "permission_requirements"=> "",
                "parking_requirements"=> "",
                "special_instructions"=> "",
                "linked_quote_id"=> null,
                "start_time"=> null,
                "finish_time"=> null,
                "created_on"=> "2018-01-10 16:02:32",
                "created_by"=> "2",
                "last_modified"=> "2018-01-16 16:32:27",
                "last_modified_by"=> null,
                "main_address_id"=> "1011",
                "address_line_1"=> "13 Lynwood Drive",
                "address_line_2"=> "Worcester Park",
                "address_line_3"=> "KT4 7AA",
                "address_city"=> "Worcester Park",
                "address_county"=> "Surrey",
                "address_postcode"=> "KT4 7AA",
                "customer_name"=> "Josh Brand",
                "linked_client"=> "PC Computers",
                "address_summaryline"=> "13 Lynwood Drive, Worcester Park, Surrey, KT4 7AA",
                "address_business_name"=> ""
            ],
            [
                "job_id"=> "7",
                "customer_id"=> "2",
                "account_id"=> "3",
                "job_address_id"=> "1767",
                "job_type"=> "Installation",
                "job_date"=> "2018-01-11",
                "job_status"=> "Successful",
                "job_duration"=> "1.0",
                "job_notes"=> "",
                "assigned_to"=> null,
                "works_required"=> "",
                "access_requirements"=> "",
                "permission_requirements"=> "",
                "parking_requirements"=> "",
                "special_instructions"=> "",
                "linked_quote_id"=> "23",
                "start_time"=> null,
                "finish_time"=> null,
                "created_on"=> "2018-01-11 12:42:27",
                "created_by"=> "2",
                "last_modified"=> "2018-01-16 16:32:27",
                "last_modified_by"=> null,
                "main_address_id"=> "1767",
                "address_line_1"=> "Flat 1",
                "address_line_2"=> "22 The Green",
                "address_line_3"=> "Twickenham, TW2 5AB",
                "address_city"=> "Twickenham",
                "address_county"=> "Greater London",
                "address_postcode"=> "TW2 5AB",
                "customer_name"=> "Bo Joe",
                "linked_client"=> "Paint 'n Water",
                "address_summaryline"=> "Flat 1, 22 The Green, Twickenham, Greater London, TW2 5AB",
                "address_business_name"=> ""
            ],
            [
                "job_id"=> "8",
                "customer_id"=> "21",
                "account_id"=> "3",
                "job_address_id"=> "1012",
                "job_type"=> "Installation",
                "job_date"=> "2018-01-11",
                "job_status"=> "Successful",
                "job_duration"=> "1.0",
                "job_notes"=> "",
                "assigned_to"=> null,
                "works_required"=> "",
                "access_requirements"=> "",
                "permission_requirements"=> "",
                "parking_requirements"=> "",
                "special_instructions"=> "",
                "linked_quote_id"=> "21",
                "start_time"=> null,
                "finish_time"=> null,
                "created_on"=> "2018-01-11 12:44:03",
                "created_by"=> "2",
                "last_modified"=> "2018-01-16 16:32:27",
                "last_modified_by"=> null,
                "main_address_id"=> "1012",
                "address_line_1"=> "15 Lynwood Drive",
                "address_line_2"=> "Worcester Park",
                "address_line_3"=> "KT4 7AA",
                "address_city"=> "Worcester Park",
                "address_county"=> "Surrey",
                "address_postcode"=> "KT4 7AA",
                "customer_name"=> "John Boe",
                "linked_client"=> "Job Done Ltd.",
                "address_summaryline"=> "15 Lynwood Drive, Worcester Park, Surrey, KT4 7AA",
                "address_business_name"=> ""
            ]
        ]
    ];

    public $view_customers = [
        "auth_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL1NpbXBseVNJRF9wcm9kdWN0aW9uXC8iLCJzdWIiOiIzIiwiaWF0IjoxNTE2NjE1NzM4LCJleHAiOjE1MTY2NDQ1MzgsIm5iZiI6MTUxNjYxNTczOCwiZGF0YSI6eyJ1c2VyIjp7InVzZXJuYW1lIjoiamFrZWhvbGRvbSIsImlkIjoiMyIsImZpcnN0X25hbWUiOiJKYWtlIiwibGFzdF9uYW1lIjoiSG9sZG9tIiwiZW1haWwiOiJqYWtlaG9sZG9tQGhvdG1haWwuY29tIiwiYWN0aXZlIjoiMSIsImxhc3RfbG9naW4iOiIxNTE2MjAxMjY1IiwiYWNjb3VudF9pZCI6IjMiLCJ1c2VyX3R5cGVfaWQiOiIxIiwiaXNfYWNjb3VudF9ob2xkZXIiOiIxIiwiaXNfYWRtaW4iOnRydWUsInBlcm1pdHRlZF9tb2R1bGVzIjpudWxsfX19.kJ0O_czCPnCtSv4FiocsiCMFXP61kFTYd0A5yp-ZEJilqgN70eIuLFs5QLaB01taUK5wGDe1vw5dOA2stExrOQ",
        "status" => true,
        "message" => "Customer records found",
        "customers" => [
            [
                "customer_id"=>"17",
                "account_id"=>"3",
                "business_name"=>"E-Kab",
                "salutation"=>"Mr",
                "first_name"=>"Enock",
                "last_name"=>"Kabungo",
                "email"=>"enock@kabungoo.com",
                "mobile"=>"07809759676",
                "telephone"=>"",
                "customer_type"=>null,
                "customer_reference"=>null,
                "fax"=>"",
                "website"=>"www.e-kab.co.uk",
                "vat_number"=>"123456789",
                "company_number"=>"",
                "status_id"=>null,
                "is_active"=>"1",
                "archived"=>"0",
                "is_vip"=>"0",
                "created_on"=>"2018-01-18 11:56:16",
                "created_by"=>null,
                "last_modified"=>"2018-01-22 10:02:23",
                "last_modified_by"=>null
            ],
            [
                "customer_id"=>"16",
                "account_id"=>"3",
                "business_name"=>"Speed Cleaning",
                "salutation"=>"Mr",
                "first_name"=>"Jack",
                "last_name"=>"Pritchard",
                "email"=>"jack@pritchard.com",
                "mobile"=>"07948994944",
                "telephone"=>"02083494949",
                "customer_type"=>null,
                "customer_reference"=>null,
                "fax"=>"07983493844",
                "website"=>"www.jack.com",
                "vat_number"=>"07939349393",
                "company_number"=>"58489390393",
                "status_id"=>null,
                "is_active"=>"1",
                "archived"=>"0",
                "is_vip"=>"0",
                "created_on"=>"2018-01-17 17:06:56",
                "created_by"=>null,
                "last_modified"=>"2018-01-22 10:02:23",
                "last_modified_by"=>null
            ]
        ]
    ];


    public $job_profile = [

        "auth_token" =>  "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL1NpbXBseVNJRF9wcm9kdWN0aW9uXC8iLCJzdWIiOiIzIiwiaWF0IjoxNTE2NjE1NzM4LCJleHAiOjE1MTY2NDQ1MzgsIm5iZiI6MTUxNjYxNTczOCwiZGF0YSI6eyJ1c2VyIjp7InVzZXJuYW1lIjoiamFrZWhvbGRvbSIsImlkIjoiMyIsImZpcnN0X25hbWUiOiJKYWtlIiwibGFzdF9uYW1lIjoiSG9sZG9tIiwiZW1haWwiOiJqYWtlaG9sZG9tQGhvdG1haWwuY29tIiwiYWN0aXZlIjoiMSIsImxhc3RfbG9naW4iOiIxNTE2MjAxMjY1IiwiYWNjb3VudF9pZCI6IjMiLCJ1c2VyX3R5cGVfaWQiOiIxIiwiaXNfYWNjb3VudF9ob2xkZXIiOiIxIiwiaXNfYWRtaW4iOnRydWUsInBlcm1pdHRlZF9tb2R1bGVzIjpudWxsfX19.kJ0O_czCPnCtSv4FiocsiCMFXP61kFTYd0A5yp-ZEJilqgN70eIuLFs5QLaB01taUK5wGDe1vw5dOA2stExrOQ",
        "status" => true,
        "message" => "Job found",
        "job" => [
            "job_id"=> "3",
            "customer_id"=> "2",
            "account_id"=> "3",
            "job_address_id"=> "1776",
            "job_type"=> "Installation",
            "job_date"=> "2018-01-10",
            "job_status"=> "Un-assigned",
            "job_duration"=> "1.0",
            "job_notes"=> "",
            "assigned_to"=> null,
            "works_required"=> "",
            "access_requirements"=> "",
            "permission_requirements"=> "",
            "parking_requirements"=> "",
            "special_instructions"=> "",
            "linked_quote_id"=> null,
            "start_time"=> null,
            "finish_time"=> null,
            "created_on"=> "2018-01-10 09:39:56",
            "created_by"=> "2",
            "last_modified"=> "2018-01-16 16:32:27",
            "last_modified_by"=> null,
            "main_address_id"=> "1776",
            "address_line_1"=> "30A The Green",
            "address_line_2"=> "Twickenham",
            "address_line_3"=> "TW2 5AB",
            "address_city"=> "Twickenham",
            "address_county"=> "Greater London",
            "address_postcode"=> "TW2 5AB",
            "address_summaryline"=> "30A The Green, Twickenham, Greater London, TW2 5AB",
            "address_business_name"=> "",
            "required_items"=> null,
            "confirmed_items"=> null,
            "comm_logs"=> false
        ]
    ];
}
