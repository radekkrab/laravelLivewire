
<table class="mx-auto table-auto border-separate border border-black">
                        <thead>
                            <tr>
                            <th class="border border-black">Название задачи</th>
                            <th class="border border-black">Описание задачи</th>
                            <th class="border border-black">Текущий статус</th>
                            <th class="border border-black">История статусов</th>
                            </tr>
                        </thead>
<tbody>
    
@foreach ($tasks as $task)

<tr wire:key="{{ $task['task']['id'] }}">
    <td class="border border-black">{{ $task['task']['name'] }}</td>
    <td class="border border-black">{{ $task['task']['description'] }}</td>
    <td class="border border-black" >{{ $task['status'] }} <input type="checkbox" id="{{ $task['task']['id'] }}"  name="{{ $task['task']['name'] }}" wire:model.live="isSelected"></td> 
    <td class="border border-black">{{ $task['date'] }}</td>            
</tr>
 @endforeach
 <tbody>
 </table>