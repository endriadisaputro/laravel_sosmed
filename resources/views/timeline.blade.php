<x-app-layout>	
	<x-container>
		<div class="grid grid-cols-12 gap-6">
			<div class="col-span-7">
				<div class="space-y-6">
					<div class="border rounded-xl p-5 space-y-5">
						@foreach($statuses as $status)
							<div class="flex">
								<div class="flex-srink-0">
									<img class="w-10 h-10 rounded-full mr-3" src="https://i.pravatar.cc/150" alt="{{$status->user->name}}">
								</div>
								<div>
									<div class="font-semibold">{{$status->user->name}}</div>
									<div class="leading-relaxed">{{$status->body}}</div>
									<div class="text-gray-600 text-sm">{{$status->created_at->diffForHumans()}}</div>					
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="col-span-5">
				<div class="border p-5 rounded-xl">
					<h1 class="font-semiblod mb-5">Recently Follows</h1>
					<div class="space-y-5">
						@foreach(Auth::user()->follows()->limit(5)->get() as $user)
							<div class="flex items-center">
								<div class="flex-srink-0">
									<img class="w-10 h-10 rounded-full mr-3" src="https://i.pravatar.cc/150" alt="{{$status->user->name}}">
								</div>
								<div>
									<div class="font-semibold">{{$user->name}}</div>
									<div class="text-gray-600 text-sm">{{$user->pivot->created_at->diffForHumans()}}</div>					
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</x-container>
</x-app-layout>		