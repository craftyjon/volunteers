<?php

namespace Tests\Unit;

use App\Models\Department;
use App\Models\Event;
use App\Models\EventRole;
use App\Models\Role;
use App\Models\Schedule;
use App\Models\Shift;
use App\Models\Slot;
use App\Models\User;
use App\Models\UserData;
use App\Models\UserRole;
use App\Models\UserUpload;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FactoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     *
     * @return void
     */
    public function department_factory_is_working()
    {
        $this->factory(Department::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function event_factory_is_working()
    {
        $this->factory(Event::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function event_role_factory_is_working()
    {
        $this->factory(EventRole::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function role_factory_is_working()
    {
        $this->factory(Role::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function schedule_factory_is_working()
    {
        $this->factory(Schedule::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function shift_factory_is_working()
    {
        $this->factory(Shift::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function slot_factory_is_working()
    {
        $this->factory(Slot::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_factory_is_working()
    {
        $this->factory(User::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_data_factory_is_working()
    {
        $this->factory(UserData::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_role_factory_is_working()
    {
        $this->factory(UserRole::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

    /**
     * @test
     *
     * @return void
     */
    public function user_upload_factory_is_working()
    {
        $this->factory(UserUpload::class)->create();
        $this->assertTrue(true); //tests no exception thrown
    }

}
