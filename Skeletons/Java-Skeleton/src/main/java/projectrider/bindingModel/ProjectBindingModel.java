package projectrider.bindingModel;

import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

public class ProjectBindingModel {

    @NotNull
    @Size(min=1)
    private String title;

    @NotNull
    @Size(min=1)
    private String description;

    private long budget;

    public ProjectBindingModel() {
    }

    public ProjectBindingModel(String title, String description, long budget) {
        this.title = title;
        this.description = description;
        this.budget = budget;
    }

    public String getTitle() {
        return this.title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return this.description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public long getBudget() {
        return this.budget;
    }

    public void setBudget(long budget) {
        this.budget = budget;
    }
}
