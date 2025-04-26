public class Plan {
    private String name;
    private int cost;
    private String service;

    public Plan(String name, int cost, String service) {
        this.name = name;
        this.cost = cost;
        this.service = service;
    }

    public String getName() {
        return this.name;
    }

    public int getCost() {
        return this.cost;
    }

    public String getService() {
        return this.service;
    }
}
