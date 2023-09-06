{{-- from 10:28 --}}
<div>
    <form wire:submit.prevent="register">
        {{-- section one personal details --}}
        @if ($current_step == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">Step 1/4 - Employee Personal Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" wire:model="first_name">
                                <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" wire:model="last_name">
                                <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" wire:model="email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" wire:model="phone">
                                <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control" wire:model="gender">
                                    <option value="" selected disabled>Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Age" wire:model="age">
                                <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control" cols="30" rows="5" wire:model="address"></textarea>
                                <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        {{-- section two degree details --}}
        @if ($current_step == 2)
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">Step 2/4 - Employee Qualification Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="degree">Degree</label>
                                <input type="text" class="form-control" id="degree" name="degree" placeholder="Degree" wire:model="degree">
                                <span class="text-danger">@error('degree'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="college">College</label>
                                <input type="text" class="form-control" id="college" name="college" placeholder="College" wire:model="college">
                                <span class="text-danger">@error('college'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="passout_year">Year of passout</label>
                                <input type="text" class="form-control" id="passout_year" name="passout_year" placeholder="Year of passout" wire:model="passout_year">
                                <span class="text-danger">@error('passout_year'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="score">Score in percentage</label>
                                <input type="text" class="form-control" id="score" name="score" placeholder="Score" wire:model="score">
                                <span class="text-danger">@error('score'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- section three job details --}}
        @if ($current_step == 3)
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">Step 3/4 - Current Employer Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current_employer">Current Employer</label>
                                <input type="text" class="form-control" id="current_employer" name="current_employer" placeholder="Current Employer" wire:model="current_employer">
                                <span class="text-danger">@error('current_employer'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="job_profile">Job profile</label>
                                <input type="text" class="form-control" id="job_profile" name="job_profile" placeholder="Job profile" wire:model="job_profile">
                                <span class="text-danger">@error('job_profile'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="notice_peroid">Notice Peroid in days</label>
                                <input type="text" class="form-control" id="notice_peroid" name="notice_peroid" placeholder="Notice Peroid" wire:model="notice_peroid">
                                <span class="text-danger">@error('notice_peroid'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="salary">Salary in per annum</label>
                                <input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" wire:model="salary">
                                <span class="text-danger">@error('salary'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- final step preview entered details --}}
        @if ($current_step == 4)
        <div class="final-step">
            <div class="card-header bg-secondary text-white text-center">Step 4/4 - Preview Entered Details</div>
            <div class="card-body">
                <h2>Preview of the details filled.</h2>
                <hr>
                <p><b>Basic Details</b></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name: </label> <span>{{ $this->first_name }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name: </label> <span>{{ $this->last_name }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email: </label> <span>{{ $this->email }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone: </label> <span>{{ $this->phone }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender: </label> <span>{{ $this->gender }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Age: </label> <span>{{ $this->age }}</span>
                        </div>
                    </div>
                </div><div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Address: </label> <span style="clear: both;display: inline-block;overflow: hidden;white-space: nowrap;">{{ $this->address }}</span>
                        </div>
                    </div>
                </div>
                <hr>
                <p><b>Education Details</b></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Degree: </label> <span>{{ $this->degree }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>College: </label> <span>{{ $this->college }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Passout Year: </label> <span>{{ $this->passout_year }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Score: </label> <span>{{ $this->score }}</span>
                        </div>
                    </div>
                </div>
                <hr>
                <p><b>Employement Details</b></p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Current Employer: </label> <span>{{ $this->current_employer }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Job Profile: </label> <span>{{ $this->job_profile }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Notice Peroid: </label> <span>{{ $this->notice_peroid }} days</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Salary: </label> <span>{{ $this->salary }} lpa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($current_step == 1)
                <div></div>
            @endif

            @if ($current_step == 2 || $current_step == 3 || $current_step == 4)
                <button type="button" id="btn-back" class="btn btn-sm btn-secondary ml-2" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($current_step == 1 || $current_step == 2 || $current_step == 3)
                <button type="button" id="btn-next" class="btn btn-sm btn-success mr-2" wire:click="increaseStep()">Next</button>
            @endif

            @if ($current_step == 4)
                <button type="submit" id="btn-submit" class="btn btn-sm btn-primary mr-2">Submit</button>
            @endif
        </div>
    </form>
</div>
