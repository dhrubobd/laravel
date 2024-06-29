<x-layout title="Profile">
    <x-slot:title>
        {{$name}}'s Profile
    </x-slot:title>
    <x-slot:pagetitle>
        Hello {{$name}}!
    </x-slot:pagetitle>    
    <h2>Upload Your Photo</h2>
    <form class="flash default" enctype="multipart/form-data" action="/profile/upload" method="POST">
        @csrf
        <fieldset class="accent">
            Upload Profile Picture:
            <input class="flash default"  type="file" name="profile_picture">
            <br>
            <input class="flash default"  type="submit" value="Submit">
        </fieldset>
    </form>
</x-layout>