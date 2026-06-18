<div>
    <h2>Add new user</h2>

    @if ($errors->any())
        <div style="color:red">
            @foreach ($errors->all() as $error)
                {{-- <div>{{ $error }}</div> --}}
            @endforeach
        </div>
    @endif

    <form action={{ route('user.add') }} method="POST">
        @csrf
        <div class="input-wrap">
            <input type="text" name="username" placeholder="username" class="{{ $errors->first('username') ? 'is-invalid': '' }}" />
            <span>
                @error('username')
                 {{ $message }}
                @enderror
            </span>
        </div>
        <div class="input-wrap">
            <input type="email" name="email" placeholder="email" />
            <span>@error('email')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="input-wrap">
            <input type="text" name="city" placeholder="city" value="{{ old('city') }}" />
            <span>@error('city')
                {{ $message }}
            @enderror</span>
        </div>
        <div class="input-wrap">
            <button>Add new user</button>
        </div>
    </form>
</div>

<style>

    input {
        border: 1px solid orange;
        height: 35px;
        width:200px;
        border-radius: 2px;
        color: orange;
    }

    
</style>