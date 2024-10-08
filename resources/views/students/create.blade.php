@php
  $classes = ['One', 'Two', 'Three', 'Four', 'Five' , 'Six' , 'Seven', 'Eight', 'Nine', 'Ten'];   
  $sections = ['A','B'];
  $total = 0;
@endphp
<x-layout>
    <x-students-nav />

    <div class="hidden md:block">
    <form action="/students" method="POST" class="mt-5 flex flex-col justify-center items-center border-2 p-5 border-blue-200 shadow-md shadow-cyan-500/50">
       @csrf
        <div class="flex flex-col flex-wrap w-full max-w-lg">
        
            <h1 class="ml-48 text-xl font-bold">Add a New Student</h1>

            <div class="mx-5 flex flew-wrap flex-row my-3">
                <div class="w-36">
                    <x-form-label for="stdName"> Students Name </x-form-label>
                </div>
                    <x-form-input type="text" id="stdName" name="stdName" />
                    <x-form-error name="stdName"/>
            </div>
        
            <div class="mx-5 flex flew-wrap flex-row my-3">
                <div class="w-36">
                    <x-form-label for="stdAddress">Student's Address:</x-form-label>
                </div>
                    <x-form-input type="text" id="stdAddress" name="stdAddress"/>
                    <x-form-error name="stdAddress"/>
            </div>

                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="stdPhone">Phone No:</x-form-label>
                    </div>
                        <x-form-input type="text" id="stdPhone" name="stdPhone"/>
                        <x-form-error name="stdPhone" />
                </div>  
        
                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="Class">Class:</x-form-label>
                    </div>
                        <x-form-input type="text" id="Class" name="Class"/>
                        <x-form-error name="Class"/>
                </div>
        
                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="Section">Section:</x-form-label>
                    </div>
                        <x-form-input type="text" id="Section" name="Section"/>
                        <x-form-error name="Section" />
                </div>
        
                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="stdEmail">Email:</x-form-label>
                    </div>
                        <x-form-input type="email" id="stdEmail" name="stdEmail"/>
                        <x-form-error name="stdEmail" />
                </div>

                <div class="mx-5 flex flew-wrap flex-row my-3">
                    <div class="w-36">
                        <x-form-label for="stdPassword">Password:</x-form-label>
                    </div>
                        <x-form-input type="password" id="stdPassword" name="stdPassword"/>
                        <x-form-error name="stdPassword" />
                </div>

                <button type="submit" class="rounded-lg bg-cyan-500 shadow-lg shadow-cyan-500/50 w-36 h-8 ml-96 mt-4 self-end">Submit</button>
            </div>

    </form>
    </div>

    
    <div class="md:hidden" id="mobile-menu">
        <form action="/students" method="POST" class="mt-5 flex flex-col w-full">
            @csrf
            
            <h1 class="text-2xl font-bold underline mb-2">Add a New Student</h1>
            <div class="flex flex-col flex-wrap w-full">
     
                 <div class="mx-3 flex flew-wrap flex-row my-3">
                     <div class="w-24">
                         <x-form-label for="stdName">Students Name </x-form-label>
                    </div>
                         <x-form-input-mobile type="text" id="stdName" name="stdName" />
                         <x-form-error name="stdName"/>
                 </div>
             
                 <div class="mx-3 flex flew-wrap flex-row my-3">
                     <div class="w-24">
                         <x-form-label for="stdAddress">Student's Address:</x-form-label>
                     </div>
                         <x-form-input-mobile type="text" id="stdAddress" name="stdAddress"/>
                         <x-form-error name="stdAddress"/>
                 </div>
     
                     <div class="mx-3 flex flew-wrap flex-row my-3">
                         <div class="w-24">
                             <x-form-label for="stdPhone">Phone No:</x-form-label>
                         </div>
                             <x-form-input-mobile type="text" id="stdPhone" name="stdPhone"/>
                             <x-form-error name="stdPhone" />
                     </div>  
             
                     <div class="mx-3 flex flew-wrap flex-row my-3">
                         <div class="w-24">
                             <x-form-label for="Class">Class:</x-form-label>
                         </div>
                             <x-form-input-mobile type="text" id="Class" name="Class"/>
                             <x-form-error name="Class"/>
                     </div>
             
                     <div class="mx-3 flex flew-wrap flex-row my-3">
                         <div class="w-24">
                             <x-form-label for="Section">Section:</x-form-label>
                         </div>
                             <x-form-input-mobile type="text" id="Section" name="Section"/>
                             <x-form-error name="Section" />
                     </div>
             
                     <div class="mx-3 flex flew-wrap flex-row my-3">
                         <div class="w-24">
                             <x-form-label for="stdEmail">Email:</x-form-label>
                         </div>
                             <x-form-input-mobile type="email" id="stdEmail" name="stdEmail"/>
                             <x-form-error name="stdEmail" />
                     </div>
     
                     <div class="mx-3 flex flew-wrap flex-row my-3">
                         <div class="w-24">
                             <x-form-label for="stdPassword">Password:</x-form-label>
                         </div>
                             <x-form-input-mobile type="password" id="stdPassword" name="stdPassword"/>
                             <x-form-error name="stdPassword" />
                     </div>
                     <button type="submit" class="rounded-lg bg-cyan-500 shadow-lg shadow-cyan-500/50 w-36 h-8 mt-4 self-end">Submit</button>
                 </div>
     
         </form>
    </div>
</x-layout>