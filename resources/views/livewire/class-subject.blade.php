@php
    $subjects = ['None', 'Maths', 'Computer', 'Science', 'Social', 'English', 'Nepali'];
    
    @endphp
<tbody>
    
    
      <button
    type="button"
    class="bg-white italic text-black w-24 h-8 text-lg border-2 rounded-md mb-3"
            id="editClassSubject"
            >
            Edit
    </button>

        <tr class="text-center bg-gray-500 bg-opacity-30
        "id="showSubjects">
            
        <td class="border-2 p-2 border-blue-700">Subjects</td>


        @for($b=0; $b<7; $b++)
        @php
            $period = ($b+1). 'period';   
            @endphp
        <td class="border-2 p-2 border-blue-700">{{ $classSubject->$period ?? 'None' }}</td>   
        @endfor
    </tr>

    
    <tr class="text-center bg-gray-500 bg-opacity-30 hidden
    " id="editSubjects">

    <td class="border-2 p-2 border-blue-700">Subjects</td>
        @for($i=0;$i<7;$i++)
        <td class="border-2 p-2 border-blue-700">
           <select name="{{$i+1}}period" class="w-full bg-opacity-40 bg-transparent text-center">
               @foreach ($subjects as $subject)
               <option value="{{$subject}}" class="dark:bg-gray-900">{{$subject}}</option>
               @endforeach
            </select>
        </td>
        @endfor 
    </tr>
    
    </tbody>