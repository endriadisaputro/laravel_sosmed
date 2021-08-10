<x-app-layout>	
	<x-container>
		<div class="grid grid-cols-12 gap-6">
			<div class="col-span-7">
				<x-card>
					<form action="{{route('statuses.store')}}" method="post">
						@csrf
						<div class="flex items-center">
							<div class="flex-srink-0">
								<img class="w-10 h-10 rounded-full mr-3" src="{{Auth::user()->gravatar()}}" alt="{{Auth::user()->name}}">
							</div>
							<div class="w-full">
								<div class="font-semibold">{{Auth::user()->name}}</div>
								<div>
									<textarea class="form-textarea w-full border-gray-300 rounded-xl resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200" name="body" id="body" placeholder="what is on your mind?"></textarea>
								</div>	
								<div class="my-2 text-right">
									<x-button>Post</x-button> 
								</div>			
							</div>
						</div>
					</form>
				</x-card>
				<div class="space-y-6 mt-5">
					<div class="space-y-5">
						@foreach($statuses as $status)
							<x-card>
								<div class="flex">
									<div class="flex-srink-0">
										<img class="w-10 h-10 rounded-full mr-3" src="{{$status->user->gravatar()}}" alt="{{$status->user->name}}">
									</div>
									<div>
										<div class="font-semibold">{{$status->user->name}}</div>
										<div class="leading-relaxed">{{$status->body}}</div>
										<div class="text-gray-600 text-sm">{{$status->created_at->diffForHumans()}}</div>					
									</div>
								</div>
							</x-card>
						@endforeach
					</div>
				</div>
			</div>

			<div class="col-span-5">
				<x-card>
					<h1 class="font-semiblod mb-5">Recently Follows</h1>
					<div class="space-y-5">
						@foreach(Auth::user()->follows()->limit(5)->get() as $user)
							<div class="flex items-center">
								<div class="flex-srink-0">
									<img class="w-10 h-10 rounded-full mr-3" src="{{$user->gravatar()}}" alt="{{$status->user->name}}">
								</div>
								<div>
									<div class="font-semibold">{{$user->name}}</div>
									<div class="text-gray-600 text-sm">{{$user->pivot->created_at->diffForHumans()}}</div>					
								</div>
							</div>
						@endforeach
					</div>
				</x-card>
			</div>
		</div>
	</x-container>
</x-app-layout>		