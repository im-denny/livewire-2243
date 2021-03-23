<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FileUpload extends Component
{
    use WithFileUploads;
    public $fileuploads;
    public $oldfileuploads;
    public function mount()
    {
        $this->fileuploads = [['filename' => 'test.jpg'],['filename' => 'test1.jpg'],['filename' => 'test2.jpg']];
    }
    public function render()
    {
        return view('livewire.file-upload');
    }
    //Saving old fileuploads in a variable
    public function updatingFileuploads()
    {
        $this->oldfileuploads = $this->fileuploads;
    }
    //Merging old and new fileuploads
    public function updatedFileuploads()
    {
        $this->fileuploads = array_merge($this->oldfileuploads, $this->fileuploads);
    }    
    //Swap the fileuploads & sorting elements on changing order by drag and drop
    public function changeOrder($reordered)
    {
        $fileuploads_directory = [];
        foreach ($this->fileuploads as $key => $value) {
            $is_lw_object = (gettype($value) == 'array') ? false : true;
            $unique_hash = $is_lw_object ? preg_replace('/[^a-z0-9]/i','',explode('.',explode('/',$value->temporaryUrl())[5])[0])
                                : preg_replace('/[^a-z0-9]/i','',$value['filename']);
            array_push($fileuploads_directory, $unique_hash);
        }
        $reordered_fileuploads = [];
        foreach (array_column($reordered, 'value') as $hash) {
            if (($key = array_search($hash, $fileuploads_directory)) >= 0) {
                array_push($reordered_fileuploads, $this->fileuploads[$key]);
            }
        }
        $this->fileuploads = $reordered_fileuploads;
    }    
}
