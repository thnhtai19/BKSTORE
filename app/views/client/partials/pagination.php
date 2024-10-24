<?php
    function paginate($total_logs, $logs_per_page, $current_page) {
        $total_pages = ceil($total_logs / $logs_per_page);
        
        if ($total_pages <= 1) {
            return '';
        }
        
        $pagination = '<nav class="flex justify-end space-x-3">';
        $pagination .= '<ul class="flex items-center -space-x-px h-8 text-sm">';
        
        if ($current_page > 1) {
            $pagination .= '<li>';
            $pagination .= '<a href="?page=' . ($current_page - 1) . '" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white rounded-l-lg">';
            $pagination .= '<span class="hidden md:block">Previous</span>';
            $pagination .= '<svg class="w-3 h-3 rtl:rotate-180 block md:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">';
            $pagination .= '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>';
            $pagination .= '</svg>';
            $pagination .= '</a>';
            $pagination .= '</li>';
        }
        
        for ($i = 1; $i <= $total_pages; $i++) {
            $pagination .= '<li>';
            if ($i == $current_page) {
                $pagination .= '<a href="?page=' . $i . 'aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">' . $i . '</a>';
            } else {
                $pagination .= '<a href="?page=' . $i . '" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">' . $i . '</a>';
            }
            $pagination .= '</li>';
        }
                
        
        if ($current_page < $total_pages) {
            $pagination .= '<li>';
            $pagination .= '<a href="?page=' . ($current_page - 1) . '" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white rounded-r-lg">';
            $pagination .= '<span class="hidden md:block">Next</span>';
            $pagination .= '<svg class="w-3 h-3 rtl:rotate-180 block md:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">';
            $pagination .= '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>';
            $pagination .= '</svg>';
            $pagination .= '</a>';
            $pagination .= '</li>';
        }
        
        $pagination .= '</ul>';
        $pagination .= '</nav>';
        
        return $pagination;
    }
?>