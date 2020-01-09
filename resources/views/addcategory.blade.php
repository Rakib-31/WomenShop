<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <form #f="ngForm" (ngSubmit)="save(f.value)">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input name="image" type="text" class="form-control" id="image" required url>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input #title="ngModel" ngModel name="title" id="title" type="text" class="form-control" required>
                    <div class="alert alert-danger" *ngIf="title.touched && title.invalid">
                        Title is required
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input #description="ngModel" ngModel name="description" type="text" class="form-control" id="description" required>
                    <div class="alert alert-danger" *ngIf="description.touched && description.invalid">
                        Description is required
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card float-right" style="width: 20rem;">
                <img class="card-img-top" [src]="image.value">
                <div class="card-body">
                    <h4 class="card-title">{{title.value}}</h4>
                    <p class="card-text">{{description.value}}</p>
                </div>
            </div>
        </div>
    </div>
</div>