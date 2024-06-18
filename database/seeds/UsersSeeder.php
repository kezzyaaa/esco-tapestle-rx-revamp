<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $User;

    public function __construct(User $User)
    {
    	$this->User = $User;
    }

    public function run()
    {
		$User = [
		    [
                'name' => 'Admin',
                'email' => 'john.mendoza@escoglobal.com',
                'password' => '$2y$10$Te0VquKmgitD3KHs21fL8eEuPO/ztNmrWjfkzwQtDMurMFatvfR3C',],
		    [
                'name' => 'Joyce Cabagnot',
                'email' => 'joyce.cabagnot@escoglobal.com',
                'password' => '$2y$10$8taSEHhdynnXW2/PvoejDuGZX7P2SCpqVxMuU7A.JpvdkuhPhX3c.',],
		    [
                'name' => 'Wynstelle Sy',
                'email' => 'wynstelle.sy@escoglobal.com',
                'password' => '$2y$10$izuUHmfxR/QXNx1tu9DTseVuWrYG5cv3ilycytp5ofSTnhgHdrpnC',],
		    [
                'name' => 'Jonah Chaangan',
                'email' => 'jonah.chaangan@escoglobal.com',
                'password' => '$2y$10$OqeVL8qupSfM7gloPrMOV.JVpdHyDUSLZBISsxoHCdjKgN5vsAvPa',],
		    [
                'name' => 'QA/Tester',
                'email' => 'jessica.pasawa@escoglobal.com',
                'password' => '$2y$10$QoNWe3oNDZmnhsiFdsXCPu50P3XpGS0feezQrw9Jp1F.U..IlNNga',],


            ];

        foreach($User as $User){
        	$get = $this->createPage($User);
        	//	var_dump($get);
        }

    }
    public function createPage($User)
    {
    	$this->User->create($User);
    	return $this;
    }

}
