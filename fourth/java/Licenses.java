abstract public class Licenses {
    private int cost;
    private int duration;
    private String description;

    public Licenses(int cost, int duration, String description) {
        this.cost = cost;
        this.duration = duration;
        this.description = description;
    }

    public int getCost() {
        return this.cost;
    }

    public int getDuration() {
        return this.duration;
    }

    public String getDescription() {
        return this.description;
    }

    public abstract float calculate();
}
