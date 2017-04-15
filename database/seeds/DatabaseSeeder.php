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
        $emp1 = Employees::create(array(
            'name' => 'Taufan',
            'telp' => '087781884330',
            'address' => 'Malang',
            'photo' => ''
            ));

        $emp2 = Employees::create(array(
            'name' => 'Fadhilah',
            'telp' => '087781884331',
            'address' => 'Surabaya',
            'photo' => ''
            ));

        $emp3 = Employees::create(array(
            'name' => 'Iskandar',
            'telp' => '087781884331',
            'address' => 'Surabaya',
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
            'id_employee' => $emp1->id_employee,
            'id_absent_status' => $absent_status1->id_absent_status,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Absents::create(array(
            'id_employee' => $emp2->id_employee,
            'id_absent_status' => $absent_status2->id_absent_status,
            'datetime' => '1999-01-08 04:05:06'
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
            'id_employee' => $emp3->id_employee,
            'username' => 'owner',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat1->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $emp1->id_employee,
            'username' => 'employee',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat3->id_employee_status,
            ));
        Logins::create(array(
            'id_employee' => $emp2->id_employee,
            'username' => 'manager',
            'password' => bcrypt('password'),
            'id_employee_status' => $emp_stat2->id_employee_status,
            ));
        $this->command->info('Login Added');

        //Schedules
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $emp2->id_employee,
            'id_manager' => $emp1->id_employee,
            'datetime' => '1999-01-08 04:05:06'
            ));
        Schedules::create(array(
            'name' => 'Kontrol Ikan',
            'id_employee' => $emp2->id_employee,
            'id_manager' => $emp1->id_employee,
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
            'id_employee' => $emp2->id_employee,
            'id_supplier' => $supp1->id_supplier,
            'amount' => 2,
            'total_price' => 1000,
            'datetime' => '1999-01-08 04:05:06',
            'id_transaction_status' => $transaction_status1->id_transaction_status
            ));
        Transactions::create(array(
            'id_fish_category' => $fish_category2->id_fish_category,
            'id_employee' => $emp2->id_employee,
            'id_supplier' => $supp2->id_supplier,
            'amount' => 5,
            'total_price' => 2000,
            'datetime' => '1999-01-08 04:05:06',
            'id_transaction_status' => $transaction_status2->id_transaction_status
            ));
        $this->command->info('Transaction Added');
        $this->command->info('All Records Added');
    }
}