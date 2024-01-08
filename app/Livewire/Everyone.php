<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Everyone extends Component
{
    
    use WithFileUploads;
    public $posts;



    public $category;
    public $description;
    public $attachment;
    public $message = '';
    public $showFeedsDialog = false;

    protected $rules = [
        'category' => 'required',
        'description' => 'required',
        'attachment' => 'nullable|file|max:10240',
    ];

    public function addFeeds()
    {
        $this->showFeedsDialog = true;
    }
    public function mount()
    {
        // Retrieve posts data and assign it to the $posts property
        $this->posts = Post::all();
    }
    public function closeFeeds()
    {
        $this->reset(['category', 'description', 'attachment']);
        $this->message = '';
        $this->showFeedsDialog = false;
    }

    public function upload()
    {
        $this->validate([
            'attachment' => 'required|file|max:10240',
        ]);

        $this->attachment->store('attachments');
        $this->message = 'File uploaded successfully!';
    }

    public function submit()
    {
        $this->validate();

        $post = Post::create([
            'category' => $this->category,
            'description' => $this->description, // Updated property name
        ]);
        if ($this->attachment) {
            $attachmentPath = $this->attachment->store('attachments', 'public');
            $post->update(['attachment' => $attachmentPath]);
        }

        $this->reset(['category', 'description', 'attachment']);
        $this->message = 'Post created successfully!';
        $this->showFeedsDialog = false;
    }

    public function render()
    {
        return view('livewire.everyone');
    }
}
