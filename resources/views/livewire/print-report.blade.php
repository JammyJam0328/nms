<div>
  <div class="flex justify-between px-4">
      <span class="font-bold uppercase">Month of {{DateTime::createFromFormat('!m', $month)->format('F')}}</span>
    <span class="font-bold">Grade: {{$grade_level}}-{{$section}}</span>
  </div>
        <div class="mt-3">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-700">
                    <tr>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            Name</th>
                        <th width="100" scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            <div class="flex flex-col"><span>Birthday </span>
                                <span class="text-xs">(mm/dd/yyyy)</span>
                            </div>
                        </th>
                        <th scope="50"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            <div class="flex flex-col">
                                <span>Weight</span> (kg)
                            </div>
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            Height (m)</th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            sex</th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            height(2)</th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            <div class="font-bold">Age</div>
                            <div class="text-xs">(y,m)</div>
                        </th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            BMI</th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            NUTRITIONAL status</th>
                        <th scope="col"
                            class="px-4 py-2 text-left text-xs font-bold text-white uppercase tracking-wider">
                            height for age</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Odd row -->
                    @forelse ($reports as $report)
                        @php
                            $height2 = round($report->height * $report->height, 2);
                            $year = \Carbon\Carbon::parse($report->sectionstudent->student->date_of_birth)
                                ->diff(\Carbon\Carbon::now())
                                ->format('%y');
                            //    dd($year);
                            $month = \Carbon\Carbon::parse($report->sectionstudent->student->date_of_birth)
                                ->diff(\Carbon\Carbon::now())
                                ->format('%m');
                        @endphp
                        <tr class="bg-white border-2">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $report->sectionstudent->student->first_name }}
                                {{ $report->sectionstudent->student->last_name }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->sectionstudent->student->date_of_birth }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->weight }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->height }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->sectionstudent->student->sex }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $height2 }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $year }},{{ $month }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->bmi }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->status }}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                                {{ $report->height_for_age }}</td>

                        </tr>
                    @empty
                    @endforelse



                    <!-- More people... -->
                </tbody>
            </table>
        </div>
</div>
