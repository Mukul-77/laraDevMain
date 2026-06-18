<div>
    <h2>Add new user</h2>

    <form method="POST" action="{{ route('user.addData') }}">
        @csrf
        <div class="input-wrap">
            <h4>User Skills</h4>
            <input id="php" type="checkbox" name="skill[]" value="php" />
            <label for="php">PHP</label>
            <input id="react" type="checkbox" name="skill[]" value="react" />
            <label for="react">React</label>
            <input id="node" type="checkbox" name="skill[]" value="node" />
            <label for="node">Node</label>
            <input id="express" type="checkbox" name="skill[]" value="express" />
            <label for="express">Express</label>
        </div>
        <div class="input-wrap">
            <h4>Gender</h4>
            <input id="male" type="radio" name="gender" value="male" />
            <label for="male">Male</label>
            <input id="female" type="radio" name="gender" value="female" />
            <label for="female">Female</label>
            <input id="others" type="radio" name="gender" value="others" />
            <label for="others">Others</label>

            
        </div>

        <div class="input-wrap">
            <h5>Choose City</h5>
            <select name="city">
                <option value="">Select city:</option>
                <option value="HP">HP</option>
                <option value="DS">DS</option>
                <option value="LA">LA</option>
                <option value="KA">KA</option>
                
            </select>
        </div>

        <div>
            <h5>Age: <span id="ageValue">18</span></h5>

            <input
                type="range"
                name="age"
                min="18"
                max="100"
                value="18"
                oninput="document.getElementById('ageValue').innerText = this.value"
            >
        </div>

        <div class="input-wrap mt-4">
            <button>Add new user</button>
        </div>
    </form>
</div>

<style>
/* 
    input {
        border: 1px solid orange;
        height: 35px;
        width:200px;
        border-radius: 2px;
        color: orange;
    }

    .input-wrap{
        margin:10px;
    } */
</style>