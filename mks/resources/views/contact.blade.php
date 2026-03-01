@extends('layouts.app')

@section('title', 'Contact Us - MK\'S')

@section('content')
<section class="py-16 bg-slate-50">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 mb-8 text-sm font-medium">
            <a class="text-slate-500 hover:text-primary" href="{{ route('home') }}">Home</a>
            <span class="material-symbols-outlined text-slate-400">chevron_right</span>
            <span class="text-slate-900 font-medium">Contact</span>
        </nav>
        
        <!-- Page Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-slate-900 mb-4">Get In Touch</h1>
            <p class="text-slate-600 max-w-2xl mx-auto">Have questions? We're here to help. Reach out to our friendly support team.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl p-8 shadow-sm">
                <h2 class="text-2xl font-bold text-slate-900 mb-6">Send us a message</h2>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="Your name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="your@email.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
                        <input type="text" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="What's this about?">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                        <textarea rows="5" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-slate-900 font-bold py-3 rounded-lg transition-all">
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-slate-900">mail</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 mb-1">Email Us</h3>
                                <p class="text-slate-600">support@onestop.shop</p>
                                <p class="text-slate-600">We typically respond within 24 hours</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-slate-900">phone</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 mb-1">Call Us</h3>
                                <p class="text-slate-600">+1 (555) 123-4567</p>
                                <p class="text-slate-600">Monday-Friday, 9AM-6PM EST</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-slate-900">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 mb-1">Visit Us</h3>
                                <p class="text-slate-600">123 Commerce Way</p>
                                <p class="text-slate-600">Retail City, NY 10001</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Support Hours -->
                <div class="bg-white rounded-2xl p-8 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Support Hours</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-slate-600">Monday - Friday</span>
                            <span class="font-medium">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600">Saturday</span>
                            <span class="font-medium">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600">Sunday</span>
                            <span class="font-medium text-primary">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection