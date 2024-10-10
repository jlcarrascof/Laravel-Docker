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
                <div>
                    <label id="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Name
                    </label>
                </div>
            </form>
        </div>
    </div>
@endsection
