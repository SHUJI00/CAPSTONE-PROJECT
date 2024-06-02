<div class="w-full h-40">
                  <!--Oprion 1-->
                  <h3 class="mt-3 font-medium text-gray-600">The request shall be worked on immediately.</h3>
                  <form class="max-w flex justify-end gap-2">
                        <div class="flex justify-start flex-row max-w items-center">
                           <!--Start date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Service Start Date">
                           </div>

                           <span class="mx-4 text-gray-500">to</span>
                           <!--End date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Service End Date">
                           </div>
                        </div>
                  </form>
                  <!--Oprion 2-->
                  <h3 class="mt-3 font-medium text-gray-600">The request shall be held pedding due to:</h3>
                  <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">
                      <li class="w-full border-b border-gray-200 rounded-t-lg">
                          <div class="flex items-center ps-3">
                              <input id="skilled" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                              <label for="skilled" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non-availability of skilled personnel</label>
                          </div>
                      </li>
                      <li class="w-full border-b border-gray-200 rounded-t-lg">
                          <div class="flex items-center ps-3">
                              <input id="materials" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                              <label for="materials" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Non-availability of materials</label>
                          </div>
                      </li>
                  </ul>
                  <form class="max-w flex justify-end gap-2 mt-3">
                        <div class="flex justify-start flex-row max-w items-center">
                           <!--Start date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Target Start Date">
                           </div>

                           <span class="mx-4 text-gray-500">to</span>
                           <!--End date-->
                           <div class="relative max-w-sm">
                           <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                              <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                 <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                 </svg>
                           </div>
                           <input datepicker datepicker-buttons datepicker-autoselect-today type="text" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full ps-10 p-2.5" placeholder="Target End Date">
                           </div>
                        </div>
                  </form>
                  <button data-modal-target="pending-needs-modal" data-modal-toggle="pending-needs-modal" type="button" class="mt-3 bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Materials/Personnel List</button>
                  
                     <!--
                     <div class="relative overflow-x-auto sm:rounded-lg h-8">
                         <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                             <thead class="text-sm text-gray-700 bg-gray-50">
                                 <tr>
                                     <th scope="col" class="px-6 py-3">
                                         No.
                                     </th>
                                     <th scope="col" class="px-6 py-3">
                                         Qty
                                     </th>
                                     <th scope="col" class="px-6 py-3">
                                         Unit
                                     </th>
                                     <th scope="col" class="px-6 py-3">
                                         Description
                                     </th>
                                     <th scope="col" class="px-6 py-3">
                                         <span class="sr-only">delete</span>
                                     </th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr class="bg-white border-b hover:bg-gray-50">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                         1
                                     </th>
                                     <td class="px-6 py-4">
                                         1
                                     </td>
                                     <td class="px-6 py-4">
                                         1
                                     </td>
                                     <td class="px-6 py-4">
                                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                     </td>
                                     <td class="px-6 py-4 text-right">
                                         <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                     </td>
                                 </tr>
                                 <tr class="bg-white border-b hover:bg-gray-50">
                                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                         1
                                     </th>
                                     <td class="px-6 py-4">
                                         1
                                     </td>
                                     <td class="px-6 py-4">
                                         1
                                     </td>
                                     <td class="px-6 py-4">
                                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                     </td>
                                     <td class="px-6 py-4 text-right">
                                         <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
-->
                  <!--Option 3-->
                  <h3 class="mt-3 font-medium text-gray-600">The request is evaluated as a major repair/work.</h3>
                  <textarea id="recommended_action" rows="4" class="resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write recommended action..."></textarea>
                  <!--Option 4-->
                  <div class="flex items-center">
                     <input id="no_action" type="checkbox" value="" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
                     <label for="no_action" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No action is require at this time.</label>
                  </div>
               </div>
               </div>
        </div>
    </div>
</div>

<!-- pending needs modal -->
<div id="pending-needs-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-5xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-medium text-gray-900">
                    Materials/Skilled Personnel Needed
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="pending-needs-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="h-96 overflow-y-auto">
                  <!--Quantity-->
                  <div class="relative flex items-center w-40 my-2 mx-2">
                      <button type="button" id="decrement-button" data-input-counter-decrement="qty-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                          </svg>
                      </button>
      
                      <input type="text" id="qty-input" data-input-counter data-input-counter-min="0" data-input-counter-max="999" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6" placeholder="" value="0" required />
                      <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                          <span>Quantity</span>
                      </div>
      
                      <button type="button" id="increment-button" data-input-counter-increment="qty-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                          </svg>
                      </button>
                  </div>
                  <!--UNIT-->
                  <div class="relative flex items-center w-40 my-2 mx-2">
                      <button type="button" id="decrement-button" data-input-counter-decrement="unit-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                          </svg>
                      </button>
      
                      <input type="text" id="unit-input" data-input-counter data-input-counter-min="0" data-input-counter-max="999" class="bg-gray-50 border-x-0 border-gray-300 h-11 font-medium text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pb-6" placeholder="" value="0" required />
                      <div class="absolute bottom-1 start-1/2 -translate-x-1/2 rtl:translate-x-1/2 flex items-center text-xs text-gray-400 space-x-1 rtl:space-x-reverse">
                          <span>Unit</span>
                      </div>
      
                      <button type="button" id="increment-button" data-input-counter-increment="unit-input" class="bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                          <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                          </svg>
                      </button>
                  </div>

            <textarea id="recommended_action" rows="4" class="resize-none mx-2 my-2 p-2.5 w-10/12 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Write Description..."></textarea>
            <div class="flex flex-row mx-2 gap-2 my-2">
            <button type="button" class="mt-3 bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Add to Materials</button>
            <button type="button" class="mt-3 bg-green-700 hover:bg-green-600 flex flex-row gap-1 py-2 px-2 rounded-md text-white font-medium">Add to Personnel</button>
            </div>

            <h3 class="ml-3 mt-3 font-medium text-gray-600">Materials</h3>
            <div class="max-w border h-44">
               <div class="shadow-md h-full overflow-y-auto overflow-x-auto  sm:rounded-md bg-white">
                  <table class="table-fixed w-full">
                     <thead class="sticky top-0 bg-[#47BC8D]">
                       <tr>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">No.</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Quantity</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Unit</th>
                           <th class="w-full text-left text-white p-1.5 font-medium">Description</th>
                           <th class="w-10"></th>
                       </tr>
                     </thead>
                     <tbody>
                       <!-- Example data --> 
                     <tr>
                        <td class="px-2 py-4">
                             1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                           Sed do eiusmod tempor incididunt.
                        </td>
                        <td class="py-3 justify-center">
                           <button data-modal-target="delete_btn_materials" data-modal-toggle="delete_btn_materials" class="bg-[#EB6B23] hover:bg-[#AE501C] py-2 px-2 rounded-md"><img class="h-5" src="/susers/asset/icons/delete.png" alt="viewicon"></button>
                        </td>
                     </tr>        
                     </tbody>
                   </table>
               </div>

               <h3 class="ml-3 mt-3 font-medium text-gray-600">Skilled Personnel</h3>
               <div class="max-w border h-44">
               <div class="shadow-md h-full overflow-y-auto sm:rounded-md bg-white">
                  <table class="table-fixed w-full">
                     <thead class="sticky top-0 bg-[#47BC8D]">
                       <tr>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">No.</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Quantity</th>
                           <th class="w-1/5 text-left text-white p-1.5 font-medium">Unit</th>
                           <th class="w-full text-left text-white p-1.5 font-medium">Description</th>
                           <th class="w-10"></th>
                       </tr>
                     </thead>
                     <tbody>
                       <!-- Example data -->
                       <tr>
                        <td class="px-2 py-4">
                             1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                            1
                        </td>
                        <td class="px-2 py-4">
                           Sed do eiusmod tempor incididunt.
                        </td>
                        <td class="py-3 justify-center">
                           <button data-modal-target="delete_btn" data-modal-toggle="delete_btn" class="bg-[#EB6B23] hover:bg-[#AE501C] py-2 px-2 rounded-md"><img class="h-5" src="/susers/asset/icons/delete.png" alt="viewicon"></button>
                        </td>
                     </tr>         
                     </tbody>
                   </table>
               </div>
            </div>
            <!-- Modal Footer -->
        </div>
    </div>
</div>

<div id="delete_btn_materials" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
   <div class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-white rounded-lg shadow border">
         <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-600 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="delete_btn_materials">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
               <span class="sr-only">Close modal</span>
         </button>
            <div class="p-4 md:p-5 text-center">
               <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
               </svg>
               <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you want to delete this materials?</h3>
               <button data-modal-hide="delete_btn_materials" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                  Yes, I'm sure
               </button>
               <button data-modal-hide="delete_btn_materials" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-600 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancel</button>
            </div>
      </div>
   </div>