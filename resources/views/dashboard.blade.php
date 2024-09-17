<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-bree.button>wwwww</x-bree.button>
                    <div class="px-4">
                        <div class="my-5">
                            <h2 class="text-lg font-semibold text-gray-900">Mentors</h2>
                        </div>
                        <div class="grid sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-3">
                            <x-bree.card>
                                <x-bree.text-input />

                            </x-bree.card>
                            <x-bree.card>
                                <x-bree.text-input />
                            </x-bree.card>
                            <x-bree.card>
                                <x-bree.text-input />
                                <x-bree.text-input />
                            </x-bree.card>
                        </div>
                    </div>

                    <table id="example"class="stripe hover bg-teal-600 text-white mt-4"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009-01-12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012-03-29</td>
                                <td>$433,060</td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
