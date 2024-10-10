@extends('layouts.app')

@section('title')
    Register on DevStagram
@endsection

@section('content')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Image here</p>
        </div>

        <div class="md:w-1/2">
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Name
                    </label>
                    <input id="name" name="name" type="text" placeholder="Your name" class="border p-3 w-full rounded-lg" />
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input id="username" name="username" type="text" placeholder="Username" class="border p-3 w-full rounded-lg" />
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Your Email" class="border p-3 w-full rounded-lg" />
                </div>
            </form>
        </div>
    </div>
@endsection
