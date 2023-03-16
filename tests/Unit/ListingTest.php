<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;

class ListingTest extends TestCase
{
    use RefreshDatabase;

    public function test_listing_index_have_data()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true
        ]);

        Listing::factory()->count(10)->create([
            'by_user_id' => 1
        ]);

        $response = $this->get('/listing');

        $response->assertStatus(200);
        $response->assertInertia(
            fn(Assert $page) => $page
                ->has('listings')
        );
    }

    public function test_listing_can_be_store()
    {
        $user = User::factory()->create();
        $data = [
            'beds' => 2,
            'baths' => 1,
            'area' => 1000,
            'city' => 'Test City',
            'code' => 12345,
            'street' => 'Test Street',
            'street_number' => '1A',
            'price' => 1000000,
        ];

        $response = $this->actingAs($user)->post(route('listing.store'), $data);

        $response->assertRedirect(route('listing.index'));
        $response->assertSessionHas('success', 'Listing was created.');

        $this->assertDatabaseHas('listings', $data);

        $response = $this->get('/listing');
        $response->assertInertia(
            fn(Assert $page) =>
            $page->component('Listing/Index')
                ->has('flash.success')
                ->where('flash.success', 'Listing was created.')
        );
    }

    public function test_listing_can_be_shown()
    {
        $user = User::factory()->create();
        $listing = Listing::factory()->create(['by_user_id' => $user->id]);

        $response = $this->actingAs($user)->get(route('listing.show', $listing->id));

        $response->assertStatus(200);
        $response->assertInertia(
            fn(Assert $page) =>
            $page->component('Listing/Show')
                ->has('listing')
                ->where('listing.id', $listing->id)
                ->where('listing.by_user_id', $user->id)
        );
    }

    public function test_listing_can_be_updated()
    {
        $user = User::factory()->create();
        $listing = Listing::factory()->create(['by_user_id' => $user->id]);
        $newData = [
            'beds' => 3,
            'baths' => 2,
            'area' => 1200,
            'city' => 'New York',
            'code' => 12345,
            'street' => 'Broadway',
            'street_number' => '123',
            'price' => 1500000,
        ];

        $response = $this->actingAs($user)->put(route('listing.update', $listing->id), $newData);

        $response->assertRedirect(route('listing.index'));
        $response->assertSessionHas('success', 'Listing was updated.');

        $this->assertDatabaseHas('listings', array_merge($newData, ['id' => $listing->id]));

        $response = $this->get('/listing');
        $response->assertInertia(
            fn(Assert $page) =>
            $page->component('Listing/Index')
                ->has('flash.success')
                ->where('flash.success', 'Listing was updated.')
        );
    }

    public function test_listing_can_be_deleted()
    {
        $user = User::factory()->create();
        $listing = Listing::factory()->create(['by_user_id' => $user->id]);

        $response = $this->actingAs($user)->delete(route('listing.destroy', $listing->id));

        $response->assertRedirect(route('listing.index'));
        $response->assertSessionHas('success', 'Listing was deleted.');

        $this->assertDatabaseMissing('listings', ['id' => $listing->id]);

        $response = $this->get('/listing');
        $response->assertInertia(
            fn(Assert $page) =>
            $page->component('Listing/Index')
                ->has('flash.success')
                ->where('flash.success', 'Listing was deleted.')
        );
    }

}