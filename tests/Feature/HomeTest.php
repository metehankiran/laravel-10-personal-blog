<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class HomeTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     */
    public function test_is_show_the_home_page(): void
    {
        $this->get(route('home.index'))
            ->assertStatus(200)
            ->assertViewIs('home.index');
    }

    public function test_is_show_the_contact(): void
    {
        $this->get(route('home.contact'))
            ->assertStatus(200)
            ->assertViewIs('home.contact');
    }

    public function test_it_stores_the_contact_form_data(): void
    {
        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'message' => $this->faker->text,
        ];

        $this->post(route('home.contact.store'), $data)
            ->assertStatus(302)
            ->assertRedirect(route('home.contact') . '#contact-result')
            ->assertSessionHas('success');

        $contact = Contact::where('email', $data['email'])->firstOrFail();

        $this->assertEquals($data['name'], $contact->name);
        $this->assertEquals($data['email'], $contact->email);
        $this->assertEquals($data['message'], $contact->message);
    }
}
