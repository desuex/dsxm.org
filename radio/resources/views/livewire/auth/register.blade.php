<form wire:submit.prevent="register">
<div>
    <label for="email">Email</label>
    <input wire:model.lazy="email" type="email" id="email" name="email">
    @error('email')<span style="color:red">{{$message}}</span> @enderror
</div>
<div>
    <label for="name">Name</label>
    <input wire:model.lazy="name" type="text" id="name" name="name">
    @error('name')<span style="color:red">{{$message}}</span> @enderror
</div>
<div>
    <label for="password">Password</label>
    <input wire:model.lazy="password" type="password" id="password" name="password">
    @error('password')<span style="color:red">{{$message}}</span> @enderror
</div>


<div>
    <label for="passwordConfirmation">Password Confirmation</label>
    <input wire:model.lazy="passwordConfirmation" type="password" id="passwordConfirmation" name="passwordConfirmation">
    @error('passwordConfirmation')<span style="color:red">{{$message}}</span> @enderror
</div>
<div>
    <input type="submit" value="Register">
</div>
</form>