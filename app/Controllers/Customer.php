<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CustomerModel;
class Customer extends BaseController
{
  
    public function index()
    {
        echo view('pages/front/customer/allCustomer');
    }
    /**
    * customer list page all data
    * @route 127.0.0.1/customer -> allCustomer (ajax call )
    * @since 03-08-2024
    * @author Sarfaraj Sipai
    */
    public function allCustomer()
    {
        $CustomerModel = new CustomerModel();
        $customer_data = $CustomerModel->getAllData();
        // echo "<pre>"; print_r($customer_data);
        $response = '';
        if(isset($customer_data) != '' ) {
            
            foreach($customer_data as $data => $row) {                

                $action = '<a href="' . base_url("/customer/detail/" . $row['id']) . '" class="btn btn-outline-primary waves-effect waves-light" title="View"><i class="fas fa-regular fa-eye"></i></a>';			

                $status = '';
                if ($row['status'] == "active") {
                    $status = '<span class="badge bg-success font-size-11 p-2" >' . ucfirst($row['status']) . '</span>';
                }
                else if ($row['status'] == "deactive") {
                    $status = '<span class="badge bg-warning font-size-11 p-2" >' . ucfirst($row['status']) . '</span>';
                } else {
                    $status = '<span class="badge bg-danger font-size-11 p-2" > ' . ucfirst($row['status']) . '</span>';
                }

                $company_name = '<img src="' . base_url('assets/vendor_logo/liquiloans.png') . '" alt="Liquiloans" class="rounded" width="100">';

                $arrayList[] = [
                    "id" => $row['id'],
                    "customer" => ucwords($row['firstname']) . ucwords($row['lastname']) . '<br>' . $row['email'],
                    "mobile" => '+91 '.$row['mobile'],
                    "address" => isset($row['address']) ? $row['address'] : 'Not Available',				
                    "created_date" => date('d-m-Y ', strtotime($row['created_at'])),
                    "status" => $status,
                    "action" => $action,
                ];

            }
            $json_data = array(
                "data" => $arrayList
            );
            // print_r($json_data);
            return json_encode($json_data);
        }
        else {
            $response = [
                'message' => 'Customer data not avaialble',
            ];
            return json_encode($response);
        }
    }
    /**
    * add new customer
    * @route 127.0.0.1/customer -> addCustomer (ajax call )
    * @since 03-08-2024
    * @author Sarfaraj Sipai
    */
    public function addCustomer() {
        $data = $this->request->getPost();
        
        return json_encode($data);
    }
}
