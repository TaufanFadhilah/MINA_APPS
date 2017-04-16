<?php

use Illuminate\Database\Seeder;
use App\Employees;
use App\Absents;
use App\Absent_statuses;
use App\Suppliers;
use App\Logins;
use App\Employee_statuses;
use App\Schedules;
use App\Fish_categories;
use App\Transaction_statuses;
use App\Transactions;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        //clear our database
        DB::table('employees')->delete();
        DB::table('absents')->delete();
        DB::table('absent_statuses')->delete();
        DB::table('suppliers')->delete();
        DB::table('logins')->delete();
        DB::table('employee_statuses')->delete();
        DB::table('schedules')->delete();
        DB::table('fish_categories')->delete();
        DB::table('transaction_statuses')->delete();
        DB::table('transactions')->delete();
        $this->command->info('All Records deleted');

        //Employees
        $employee1 = Employees::create(array(
            'name' => 'Taufan',
            'telp' => '087781884330',
            'address' => 'Malang',
            'photo' => ''
            ));

        $employee2 = Employees::create(array(
            'name' => 'Niken',
            'telp' => '087781884330',
            'address' => 'Demak',
            'photo' => ''
            ));

        $employee3 = Employees::create(array(
            'name' => 'Febriani',
            'telp' => '087781884330',
            'address' => 'Jakarta',
            'photo' => ''
            ));

        $employee4 = Employees::create(array(
            'name' => 'Anantya',
            'telp' => '087781884330',
            'address' => 'Bandung',
            'photo' => ''
            ));

        $employee5 = Employees::create(array(
            'name' => 'Khrisna',
            'telp' => '087781884330',
            'address' => 'Bandung',
            'photo' => ''
            ));

        $manager1 = Employees::create(array(
            'name' => 'Fadhilah',
            'telp' => '087781884331',
            'address' => 'Surabaya',
            'photo' => ''
            ));

        $manager2 = Employees::create(array(
            'name' => 'Seta',
            'telp' => '087781884331',
            'address' => 'Bandung',
            'photo' => ''
            ));

        $manager3 = Employees::create(array(
            'name' => 'Tri',
            'telp' => '087781884331',
            'address' => 'Jakarta',
            'photo' => ''
            ));

        $owner1 = Employees::create(array(
            'name' => 'Iskandar',
            'telp' => '087781884331',
            'address' => 'Surabaya',
            'photo' => ''
            ));

        $owner2 = Employees::create(array(
            'name' => 'Handayani',
            'telp' => '087781884331',
            'address' => 'Bandung',
            'photo' => ''
            ));
        $this->command->info('Employees Added');

        //Absent_status
        $absent_status1= Absent_statuses::create(array(
            'name' => 'Attend'
            ));
        $absent_status2= Absent_statuses::create(array(
            'name' => 'Alpha'
            ));
        $this->command->info('Absent Status Added');

        //Absent
        Absents::create(array(
            'id_employee' => $employee1->id_employee,
            'id_absent_status' => $absent_status1->id_absent_status,
            'datetime' => '1999-01-08 06:05:06'
            ));
        Absents::create(array(
            'id_employee' => $manager1->id_employee,
            'id_absent_status' => $absent_status2->id_absent_status,
            'datetime' => '1999-01-18 06:05:06'
            ));
        Absents::create(array(
            'id_employee' => $employee2->id_employee,
            'id_absent_status' => $absent_status1->id_absent_status,
            'datetime' => '1999-01-20 07:05:06'
            ));
        Absents::create(array(
            'id_employee' => $manager2->id_employee,
            'id_absent_status' => $absent_status2->id_absent_status,
            'datetime' => '1999-01-22 08:05:06'
            ));
        Absents::create(array(
            'id_employee' => $employee3->id_employee,
            'id_absent_status' => $absent_status1->id_absent_status,
            'datetime' => '1999-02-01 07:05:06'
            ));
        Absents::create(array(
            'id_employee' => $employee4->id_employee,
            'id_absent_status' => $absent_status2->id_absent_status,
            'datetime' => '1999-02-04 08:05:06'
            ));
        Absents::create(array(
            'id_employee' => $employee1->id_employee,
            'id_absent_status' => $absent_status1->id_absent_status,
            'datetime' => '1999-02-04 10:05:06'
            ));
        Absents::create(array(
            'id_employee' => $manager1->id_employee,
            'id_absent_status' => $absent_status2->id_absent_status,
            'datetime' => '1999-02-14 09:05:06'
            ));
        Absents::create(array(
            'id_employee' => $employee1->id_employee,
            'id_absent_status' => $absent_status1->id_absent_status,
            'datetime' => '1999-02-20 11:05:06'
            ));
        Absents::create(array(
            'id_employee' => $manager1->id_employee,
            'id_absent_status' => $absent_status2->id_absent_status,
            'datetime' => '1999-02-20 06:05:06'
            ));

        $this->command->info('Absent Added');
        
        //Suppliers
        $supp1 = Suppliers::create(array(
            'name' => 'Takari',
            'telp' => '087791247723',
            'address' => 'Jakarta',
            'photo' => '',
            'email' => 'Takari@takari.com'
            ));

        $supp2 = Suppliers::create(array(
            'name' => 'Tsubasa',
            'telp' => '087791247723',
            'address' => 'Bandung',
            'photo' => '',
            'email' => 'Tsubasa@tsubasa.com'
            ));
        $supp3 = Suppliers::create(array(
            'name' => 'Milo',
            'telp' => '087791247723',
            'address' => 'Jakarta',
            'photo' => '',
            'email' => 'Milo@milo.com'
            ));

        $supp4 = Suppliers::create(array(
            'name' => 'Dancow',
            'telp' => '087791247723',
            'address' => 'Bandung',
            'photo' => '',
            'email' => 'Dancow@dancow.com'
            ));

        $supp5 = Suppliers::create(array(
            'name' => 'Indomaret',
            'telp' => '087791247723',
            'address' => 'Jakarta',
            'photo' => '',
            'email' => 'indomaret@indomaret.com'
            ));

        $supp6 = Suppliers::create(array(
            'name' => 'Alfamart',
            'telp' => '087791247723',
            'address' => 'Bandung',
            'photo' => '',
            'email' => 'Alfamart@alfamart.com'
            ));

        $supp7 = Suppliers::create(array(
            'name' => 'Daspro',
            'telp' => '087791247723',
            'address' => 'Jakarta',
            'photo' => '',
            'email' => 'Daspro@daspro.com'
            ));

        $supp8 = Suppliers::create(array(
            'name' => 'BPAD',
            'telp' => '087791247723',
            'address' => 'Bandung',
            'photo' => '',
            'email' => 'BPAD@bpad.com'
            ));

        $supp9 = Suppliers::create(array(
            'name' => 'Sisjar',
            'telp' => '087791247723',
            'address' => 'Jakarta',
            'photo' => '',
            'email' => 'Sisjar@sisjar.com'
            ));

        $supp10 = Suppliers::create(array(
            'name' => 'ERP',
            'telp' => '087791247723',
            'address' => 'Bandung',
            'photo' => '',
            'email' => 'ERP@erp.com'
            ));
        $this->command->info('Suppliers Added');

        //Employees_status
        $emp_stat1= Employee_statuses::create(array(
            'name' => 'Owner'
            ));
        $emp_stat2= Employee_statuses::create(array(
            'name' => 'Manager'
            ));
        $emp_stat3= Employee_statuses::create(array(
            'name' => 'Employee'
            ));
        $this->command->info('Employees_status Added');
        //Logins
        Logins::create(array(
            'id_employee' => $owner1->id_employee,
            'username' => 'owner1',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat1->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $employee1->id_employee,
            'username' => 'employee1',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat3->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $manager1->id_employee,
            'username' => 'manager1',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat2->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $owner2->id_employee,
            'username' => 'owner2',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat1->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $employee2->id_employee,
            'username' => 'employee2',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat3->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $manager2->id_employee,
            'username' => 'manager2',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat2->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $employee3->id_employee,
            'username' => 'employee3',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat3->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $employee4->id_employee,
            'username' => 'employee4',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat3->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $employee5->id_employee,
            'username' => 'employee5',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat3->id_employee_status,
            ));
        $this->command->info('Login Added');

        //Schedules
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee1->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee1->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $manager2->id_employee,
            'id_manager' => $employee4->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee5->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Panen Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee2->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Panen Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee2->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee3->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee4->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Panen Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee2->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Panen Ikan',
            'id_employee' => $manager1->id_employee,
            'id_manager' => $employee5->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        $this->command->info('Schedules Added');

        //fish_category
        $fish_category1 = Fish_categories::create(array(
            'name' => 'Lele',
            'description' => 'Ikan Lele adalah ikan yang hidup di air tawar',
            'price' => 5000,
            'photo' => '',
            ));

        $fish_category2 = Fish_categories::create(array(
            'name' => 'Nila',
            'description' => 'Ikan Nila adalah ikan yang hidup di air tawar',
            'price' => 6000,
            'photo' => '',
            ));

        $fish_category3 = Fish_categories::create(array(
            'name' => 'Bawal',
            'description' => 'Ikan Bawal adalah ikan yang hidup di air tawar',
            'price' => 8000,
            'photo' => '',
            ));

        $fish_category4 = Fish_categories::create(array(
            'name' => 'Gurame',
            'description' => 'Ikan Gurame adalah ikan yang hidup di air tawar',
            'price' => 11000,
            'photo' => '',
            ));

        $fish_category5 = Fish_categories::create(array(
            'name' => 'Emas',
            'description' => 'Ikan Emas adalah ikan yang hidup di air tawar',
            'price' => 3000,
            'photo' => '',
            ));

        $fish_category6 = Fish_categories::create(array(
            'name' => 'Pari',
            'description' => 'Ikan Pari adalah ikan yang hidup di air tawar',
            'price' => 10000,
            'photo' => '',
            ));

        $fish_category7 = Fish_categories::create(array(
            'name' => 'Bandeng',
            'description' => 'Ikan Bandeng adalah ikan yang hidup di air tawar',
            'price' => 20000,
            'photo' => '',
            ));

        $fish_category8 = Fish_categories::create(array(
            'name' => 'Bandeng Putih',
            'description' => 'Ikan Bandeng Putih adalah ikan yang hidup di air tawar',
            'price' => 25000,
            'photo' => '',
            ));

        $fish_category9 = Fish_categories::create(array(
            'name' => 'Kakap',
            'description' => 'Ikan Kakap adalah ikan yang hidup di air tawar',
            'price' => 15000,
            'photo' => '',
            ));

        $fish_category10 = Fish_categories::create(array(
            'name' => 'Kerapu',
            'description' => 'Ikan Kerapu adalah ikan yang hidup di air tawar',
            'price' => 20000,
            'photo' => '',
            ));
        $this->command->info('Fish_category Added');

        //Transaction_statuses
        $transaction_status1 = Transaction_statuses::create(array(
            'name' => 'Accepted',
            ));

        $transaction_status2 = Transaction_statuses::create(array(
            'name' => 'Rejected',
            ));
        $this->command->info('Fish_status Added');

        //Transactions
        Transactions::create(array(
            'id_fish_category' => $fish_category1->id_fish_category,
            'id_employee' => $manager1->id_employee,
            'id_supplier' => $supp1->id_supplier,
            'amount' => 2,
            'total_price' => ($fish_category1->price * 2),
            'datetime' => '1999-01-08 04:05:06',
            'id_transaction_status' => $transaction_status1->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category2->id_fish_category,
            'id_employee' => $manager1->id_employee,
            'id_supplier' => $supp5->id_supplier,
            'amount' => 5,
            'total_price' => ($fish_category2->price * 5),
            'datetime' => '1999-01-08 04:05:06',
            'id_transaction_status' => $transaction_status2->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category5->id_fish_category,
            'id_employee' => $manager1->id_employee,
            'id_supplier' => $supp5->id_supplier,
            'amount' => 2,
            'total_price' => ($fish_category5->price * 2),
            'datetime' => '1999-02-18 04:05:06',
            'id_transaction_status' => $transaction_status1->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category6->id_fish_category,
            'id_employee' => $manager1->id_employee,
            'id_supplier' => $supp8->id_supplier,
            'amount' => 5,
            'total_price' => ($fish_category6->price * 5),
            'datetime' => '1999-02-28 04:05:06',
            'id_transaction_status' => $transaction_status2->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category10->id_fish_category,
            'id_employee' => $manager2->id_employee,
            'id_supplier' => $supp8->id_supplier,
            'amount' => 8,
            'total_price' => ($fish_category10->price * 8),
            'datetime' => '1999-02-28 04:05:06',
            'id_transaction_status' => $transaction_status1->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category2->id_fish_category,
            'id_employee' => $manager2->id_employee,
            'id_supplier' => $supp2->id_supplier,
            'amount' => 8,
            'total_price' => ($fish_category2->price * 8),
            'datetime' => '1999-05-19 04:05:06',
            'id_transaction_status' => $transaction_status2->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category9->id_fish_category,
            'id_employee' => $manager1->id_employee,
            'id_supplier' => $supp9->id_supplier,
            'amount' => 9,
            'total_price' => ($fish_category9->price * 9),
            'datetime' => '1999-06-20 04:05:06',
            'id_transaction_status' => $transaction_status1->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category4->id_fish_category,
            'id_employee' => $manager2->id_employee,
            'id_supplier' => $supp4->id_supplier,
            'amount' => 4,
            'total_price' => ($fish_category4->price * 4),
            'datetime' => '1999-10-09 04:05:06',
            'id_transaction_status' => $transaction_status2->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category5->id_fish_category,
            'id_employee' => $manager2->id_employee,
            'id_supplier' => $supp5->id_supplier,
            'amount' => 20,
            'total_price' => ($fish_category5->price * 20),
            'datetime' => '1999-10-10 04:05:06',
            'id_transaction_status' => $transaction_status1->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category7->id_fish_category,
            'id_employee' => $manager1->id_employee,
            'id_supplier' => $supp7->id_supplier,
            'amount' => 7,
            'total_price' => ($fish_category7->price * 7),
            'datetime' => '1999-10-11 04:05:06',
            'id_transaction_status' => $transaction_status2->id_transaction_status
            ));

        $this->command->info('Transaction Added');
        $this->command->info('All Records Added');
    }
}