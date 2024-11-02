<x-layout>
    <x-teachers-nav />

    <div class="hidden md:block">
    <form action="/teachers" method="POST" class="ml-16 mt-5 flex flex-col dark:text-white">
            @csrf
            <div class="flex flex-col flex-wrap w-full max-w-lg mt-5">
        
                <h1 class="ml-48 text-2xl font-bold underline mb-2">Add a New Teacher</h1>
    
                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="thName"> Teacher's Name </x-form-label>
                    </div>
                        <x-form-input type="text" id="thName" name="thName" />
                        <x-form-error name="thName"/>
                </div>
            
                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="thSubject">Teacher's Subject:</x-form-label>
                    </div>
                        <x-form-input type="text" id="thSubject" name="thSubject"/>
                        <x-form-error name="thSubject"/>
                </div>  
                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="thAddress">Teacher's Address:</x-form-label>
                    </div>
                        <x-form-input type="text" id="thAddress" name="thAddress"/>
                        <x-form-error name="thAddress"/>
                </div>
    
                    <div class="mx-5 flex flew-wrap flex-row my-3">
                        <div class="w-36">
                            <x-form-label for="thPhone">Phone No:</x-form-label>
                        </div>
                            <x-form-input type="text" id="thPhone" name="thPhone"/>
                            <x-form-error name="thPhone" />
                    </div>  
            
                    <div class="mx-5 flex flew-wrap flex-row my-3">
                        <div class="w-36">
                            <x-form-label for="thEmail">Email:</x-form-label>
                        </div>
                            <x-form-input type="email" id="thEmail" name="thEmail"/>
                            <x-form-error name="thEmail" />
                    </div>
    
                    <div class="mx-5 flex flew-wrap flex-row my-3">
                        <div class="w-36">
                            <x-form-label for="thPassword">Password:</x-form-label>
                        </div>
                            <x-form-input type="password" id="thPassword" name="thPassword"/>
                            <x-form-error name="thPassword" />
                    </div>
                    <button type="submit" class="rounded-lg bg-cyan-500 shadow-lg shadow-cyan-500/50 w-36 h-8 ml-96 mt-4 self-end">Submit</button>
                </div>
    
    </form>
    </div>

    



    <div class="md:hidden" id="mobile-menu">
        <form action="/teachers" method="POST" class="mt-5 flex flex-col">
            @csrf
            <div class="flex flex-col flex-wrap mt-5">
        
                <h1 class="text-2xl font-bold underline mb-2">Add a New Teacher</h1>
    
                <div class="mx-3 flex flew-wrap flex-row my-3">
                    <div class="w-24">
                        <x-form-label for="thName"> Teacher's Name </x-form-label>
                    </div>
                        <x-form-input-mobile type="text" id="thName" name="thName" />
                        <x-form-error name="thName"/>
                </div>
            
                <div class="mx-3 flex flew-wrap flex-row my-3">
                    <div class="w-24">
                        <x-form-label for="thSubject">Teacher's Subject:</x-form-label>
                    </div>
                        <x-form-input-mobile type="text" id="thSubject" name="thSubject"/>
                        <x-form-error name="thSubject"/>
                </div>  
                <div class="mx-3 flex flew-wrap flex-row my-3">
                    <div class="w-24">
                        <x-form-label for="thAddress">Teacher's Address:</x-form-label>
                    </div>
                        <x-form-input-mobile type="text" id="thAddress" name="thAddress"/>
                        <x-form-error name="thAddress"/>
                </div>
    
                    <div class="mx-3 flex flew-wrap flex-row my-3">
                        <div class="w-24">
                            <x-form-label for="thPhone">Phone No:</x-form-label>
                        </div>
                            <x-form-input-mobile type="text" id="thPhone" name="thPhone"/>
                            <x-form-error name="thPhone" />
                    </div>  
            
                    <div class="mx-3 flex flew-wrap flex-row my-3">
                        <div class="w-24">
                            <x-form-label for="thEmail">Email:</x-form-label>
                        </div>
                            <x-form-input-mobile type="email" id="thEmail" name="thEmail"/>
                            <x-form-error name="thEmail" />
                    </div>
    
                    <div class="mx-3 flex flew-wrap flex-row my-3">
                        <div class="w-24">
                            <x-form-label for="thPassword">Password:</x-form-label>
                        </div>
                            <x-form-input-mobile type="password" id="thPassword" name="thPassword"/>
                            <x-form-error name="thPassword" />
                    </div>
                    <button type="submit" class="rounded-lg text-sm bg-cyan-500 shadow-lg shadow-cyan-500/50 mr-8 w-24 h-8 mt-4 self-end">Submit</button>
                </div>
    
    </form>
    </div>
</x-layout>